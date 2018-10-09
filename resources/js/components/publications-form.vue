<template>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Publication</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="alert alert-success" v-if="saved">
                        <strong>Success!</strong> Your publication has been saved successfully.
                    </div>

                    <div id="publication-form">
                        <form class="form-horizontal" method="post" @submit.prevent="onSubmit">

                            <fieldset>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label class="control-label" for="name">Title</label>
                                            <div class="col-md-12" :class="{'has-error': errors.name}">
                                                <input id="name"
                                                       v-model="publication.name"
                                                       type="text"
                                                       placeholder="Publication name"
                                                       class="form-control">
                                                <span v-if="errors.name"
                                                      class="help-block text-danger">{{ errors.name[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label">Subject</label>
                                            <div class="col-md-12" :class="{'has-error': errors.subject}">
                                                <el-select v-model="subject" clearable placeholder="subject:">
                                                    <el-option
                                                            v-for="item in optionsPickUp"
                                                            :key="item.value"
                                                            :label="item.label"
                                                            :value="item.value">
                                                    </el-option>
                                                </el-select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label">Scool year</label>
                                            <div class="col-md-12" :class="{'has-error': errors.scool_year}">
                                                <el-select v-model="subject" clearable placeholder="subject:">
                                                    <el-option
                                                            v-for="item in optionsPickUp"
                                                            :key="item.value"
                                                            :label="item.label"
                                                            :value="item.value">
                                                    </el-option>
                                                </el-select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label">State</label>
                                            <div class="col-md-12" :class="{'has-error': errors.state}">
                                                <el-select v-model="subject" clearable placeholder="subject:">
                                                    <el-option
                                                            v-for="item in optionsPickUp"
                                                            :key="item.value"
                                                            :label="item.label"
                                                            :value="item.value">
                                                    </el-option>
                                                </el-select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label" >Grade</label>
                                            <div class="col-md-12" :class="{'has-error': errors.grade}">
                                                <el-select v-model="subject" clearable placeholder="subject:">
                                                    <el-option
                                                            v-for="item in optionsPickUp"
                                                            :key="item.value"
                                                            :label="item.label"
                                                            :value="item.value">
                                                    </el-option>
                                                </el-select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label">Language</label>
                                            <div class="col-md-12" :class="{'has-error': errors.language}">
                                                <el-select v-model="subject" clearable placeholder="subject:">
                                                    <el-option
                                                            v-for="item in optionsPickUp"
                                                            :key="item.value"
                                                            :label="item.label"
                                                            :value="item.value">
                                                    </el-option>
                                                </el-select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label">Format</label>
                                            <div class="col-md-12" :class="{'has-error': errors.format}">
                                                <el-select v-model="subject" clearable placeholder="subject:">
                                                    <el-option
                                                            v-for="item in optionsPickUp"
                                                            :key="item.value"
                                                            :label="item.label"
                                                            :value="item.value">
                                                    </el-option>
                                                </el-select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="issn">ISSN</label>
                                            <div class="col-md-12" :class="{'has-error': errors.issn}">
                                                <input id="issn"
                                                       v-model="publication.issn"
                                                       type="text"
                                                       placeholder="issn"
                                                       class="form-control">
                                                <span v-if="errors.issn"
                                                      class="help-block text-danger">{{ errors.issn[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="isbn">ISBN</label>
                                            <div class="col-md-12" :class="{'has-error': errors.isbn}">
                                                <input id="isbn"
                                                       v-model="publication.isbn"
                                                       type="text"
                                                       placeholder="Your email"
                                                       class="form-control">
                                                <span v-if="errors.isbn"
                                                      class="help-block text-danger">{{ errors.isbn[0] }}</span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label class="control-label" for="sku">SKU</label>
                                            <div class="col-md-12" :class="{'has-error': errors.sku}">
                                                <input id="sku"
                                                        v-model="publication.sku"
                                                        type="text"
                                                        placeholder="sku"
                                                        class="form-control">
                                                <span v-if="errors.sku"
                                                      class="help-block text-danger">{{ errors.sku[0] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Create publication</button>

            </div>
        </div>
    </div>

</template>

<script>
    export default {

        data() {
            return {
                errors: [],
                saved: false,
                publication: {
                    name: null,
                    email: null,
                    body: null,
                }
            };
        },

        methods: {
            // onSubmit() {
            //     this.saved = false;
            //
            //     axios.post('api/publications', this.publication)
            //         .then(({data}) => this.setSuccessMessage())
            //         .catch(({response}) => this.setErrors(response));
            // },

            setErrors(response) {
                this.errors = response.data.errors;
            },

            setSuccessMessage() {
                this.reset();
                this.saved = true;
            },

            reset() {
                this.errors = [];
                this.publication = {name: null, email: null, body: null};
            }
        }
    }
</script>