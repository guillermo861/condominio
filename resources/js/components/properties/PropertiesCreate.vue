<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createProperty'}" class="btn btn-success">Create new Property</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-headeing">Properties list</div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Block</th>
                        <th>Street</th>
                        <th>Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="property, index in properties">
                        <td>{{ property.block}}}</td>
                        <td>{{ property.street}}}</td>
                        <td>{{ property.number}}}</td>
                        <td>
                            <router-link :to="{name: 'editProperty', params:{id: property.id}}" class="btn btn-xs btn-default">Edit</router-link>
                            <a href="#" class="btn btn-xs btn-danger" v-on:click="deleteEntry(property.id, index)">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PropertiesIndex",
        data: function () {
            return {
                properties: []
            }
        },
        mounted(){
            var app = this;
            axios.get('/api/v1/properties')
                .then(function (resp) {
                    app.properties = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load properties");
                });
        },
        methods: {
            deleteEntry(id, index){
                if (confirm("Do you really want to delete it?")){
                    var app = this;
                    axios.delete('/api/v1/properties/' +id )
                    .then(function (resp) {
                        app.properties.splice(index,1);
                    })
                    .catch(function (resp) {
                        alert("could not delete company");
                    });
                }
            }
        }
    }
</script>

<style scoped>

</style>