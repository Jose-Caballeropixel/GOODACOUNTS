<template>
<div>
    <input type="text" name="" id="" v-model="nombre">
 <button @click="buscarProducto">Busacar</button>
    <div class="elementos conatiner">
        <div class="row">
            <div class="col-md-4" v-for="(producto,index) in listaProductos" :key="index">
                <h1>{{producto.nombre}}</h1>
                <p>Precio de venta: {{producto.precio}}</p>
                <p>Codigo: {{producto.codigo}}</p>
                <button class="btn btn-success w-100" @click="agregarProducto(index)">Agregar producto</button>
            </div>
        </div>
    </div>

    <div class="factura container">

    </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            nombre: '',
            listaProductos: '',
            listaProductosEntrada: null
        }
    },
    methods:{
        buscarProducto(){
            const params = {
                'nombre' : this.nombre
            }
            axios.post('/bodeguero/buscar/producto',params)
            .then(respusta=> {
                this.listaProductos = ''
               this.listaProductos= respusta.data;
                console.log(this.listaProductos)


            })
            .catch(error => console.log(error))
            console.log(this.nombre)
        },

        agregarProducto(index){
            const producto =this.listaProductos[index]
            console.log(producto[id])
        }
    }

}
</script>

<style>

</style>
