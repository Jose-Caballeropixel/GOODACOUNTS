<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" name="" id="" v-model="nombre"  @keyup.enter="buscarProducto"/>
        <button @click="buscarProducto" class="btn btn-primary mt-2">Busacar</button>
        <div v-for="(producto, index) in listaProductos" :key="index">
          <div class="card p-4">
            <h1>{{ producto.nombre }}</h1>
            <p>Precio de venta: {{ producto.precio }}</p>
            <p>Codigo: {{ producto.codigo }}</p>
            <label for="">Cantidad</label>
            <input type="number" name="" id="" v-model="cantidad" />
            <label for="">Valor compra</label>
            <input
              step="any"
              type="number"
              name=""
              id=""
              v-model="valorCompra"/>

            <button
              class="btn btn-success w-100 mt-2"
              @click="agregarProducto(index)"
            >
              Agregar producto
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-8">

          <div class="row justify-content-end ">
              <button class="btn btn-info mb-2" @click="terminarEntrada">Finalizar</button>

          </div>
          <table class="table">
                  <tr>
                      <th>N°</th>
                      <th>Nombre</th>
                      <th>Cantiddad</th>
                      <th>Valor unit</th>
                      <th>Valor total</th>
                      <th>opciones</th>
                  </tr>
                  <tbody>

                      <tr v-for="(producto, index) in listaProductosEntrada" :key="index">
                          <td>{{index}}</td>
                          <td>{{producto.nombre}}</td>
                          <td>{{producto.cantidad}}</td>
                          <td>{{producto.valor_compra}}</td>
                          <td>{{producto.cantidad*producto.valor_compra}}</td>
                          <td><button class="btn btn-danger btn-sm" @click="eliminarProducto(index)">X</button></td>
                      </tr>
                  </tbody>
          </table>
      </div>
    </div>

  </div>
</template>

<script>
export default {
    props: ['bodega', 'proveedor'],
  data() {
    return {
      nombre: "",
      listaProductos: [],
      listaProductosEntrada: [],
      listaProductosDetalle: [],
      cantidad: 0,
      valorCompra: 0,
    }
  },
  methods: {
    buscarProducto() {
      const params = {
        nombre: this.nombre,
      };
      axios
        .post("/bodeguero/buscar/producto", params)
        .then((respusta) => {
          this.listaProductos = [];
          this.listaProductos = respusta.data;
          console.log(this.listaProductos);
          this.nombre = "";
        })
        .catch((error) => console.log(error));
    },

    agregarProducto(index) {
        const producto = this.listaProductos[index];
        this.listaProductosEntrada.push({
        bodega_id: this.bodega,
        nombre: producto.nombre,
        producto_id: producto.id,
        cantidad: this.cantidad,
        valor_compra: this.valorCompra,
        proveedor_id: this.proveedor,
         });

            localStorage.setItem('entrada-bodega', JSON.stringify(this.listaProductosEntrada))
        },
        buscarProducto(){
            const params = {
                'nombre' : this.nombre
            }
            axios.post('/bodeguero/buscar/producto',params)
            .then(respusta=> {
                this.listaProductos = ''
               this.listaProductos= respusta.data;
            })
            .catch(error => console.log(error))
            console.log(this.nombre)
        },

        eliminarProducto(index){
            this.listaProductosEntrada.splice(index,1)
            localStorage.setItem('entrada-bodega', JSON.stringify(this.listaProductosEntrada))
        },
        terminarEntrada(){
           axios.post('/bodeguero/agregar/entrada',this.listaProductosEntrada)
            .then(respusta=> {
                console.log(respusta)
            })
            .catch(error => console.log(error))
        },

  },
  created: function () {
      let datosDB = JSON.parse(localStorage.getItem('entrada-bodega'))
      if(datosDB===null){
          this.tareas = []
      }else{
          this.listaProductosEntrada= datosDB
      }
  },
  mounted: function(){

            console.log(this.nombre)

  }
  }

</script>
