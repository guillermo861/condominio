<template>
    <el-table
            :data="tableData"
            style="width: 100%">
        <el-table-column
                prop="name"
                label="Publication Title">
        </el-table-column>
        <el-table-column
                prop="state"
                label="State and Grade">
        </el-table-column>
        <el-table-column
                prop="sku"
                label="Sku">
        </el-table-column>
        <el-table-column
                prop="scool_year"
                label="Year">
        </el-table-column>
        <el-table-column
                prop="status"
                label="Status">
        </el-table-column>
        <el-table-column
                label="Operations">
            <template slot-scope="scope">
                <el-button
                        @click.native.prevent="deleteRow(scope.$index, tableData)"
                        type="text"
                        size="small">
                    Remove
                </el-button>
            </template>
        </el-table-column>
    </el-table>
</template>

<script>
    export default {
        data() {
            return {
                tableData: [],
            }
        },
        created() {
            this.fetch();
        },
        methods:{
            fetch(){
                axios.get('api/publications')
                    .then(({data}) => {
                        console.log(data);
                        this.tableData = data;
                    }
                );
            },
            deleteRow(index, rows) {
                rows.splice(index, 1);
            }
        }
    }
</script>