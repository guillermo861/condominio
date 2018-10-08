<template>
    <div>
        <div class="panel panel-default" v-for="publication in publications">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-user" id="start"></span>
                <label id="started">By</label> {{ publication.name }}
            </div>
            <div class="panel-body">
                <div class="col-md-2">
                    <div class="thumbnail">
                        <img :src="publication.avatar" :alt="publication.name">
                    </div>
                </div>
                <p>{{ publication.body }}</p>
            </div>
            <div class="panel-footer">
                <span class="glyphicon glyphicon-calendar" id="visit"></span> {{ publication.date }} |
                <span class="glyphicon glyphicon-flag" id="comment"></span>
                <a href="#" id="comments" @click="report(publication.id)">Report</a>
            </div>
        </div>
        <paginate
                :page-count="pageCount"
                :click-handler="fetch"
                :prev-text="'Prev'"
                :next-text="'Next'"
                :container-class="'pagination'">
        </paginate>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                publications: [],
                pageCount: 1,
                endpoint: 'api/publications'
            };
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch(page = 1) {
                axios.get(this.endpoint + page)
                    .then(({data}) => {
                        this.publications = data.data;
                        this.pageCount = data.meta.last_page;
                    });
            },

            // report(id) {
            //     if(confirm('Are you sure you want to report this publication?')) {
            //         axios.put('api/publications/'+id+'/report')
            //             .then(response => this.removepublication(id));
            //     }
            // },

            removepublication(id) {
                this.publications = _.remove(this.publications, function (publication) {
                    return publication.id !== id;
                });
            }
        }
    }
</script>
