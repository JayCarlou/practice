<template>
    <div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal. {{data}}</p> -->
                    <li v-for="item in ar">
                        {{item.code}}
                        <a v-bind:href="'/hello/'+ item.id">
                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-btn fa-times"></i>
                            </button>
                        </a>
                    </li>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["data", "array","did"],
            data() {
            return {
                // office : {},
                // Create a new form instance
                // form: new Form({
                //     id : '',
                //     code: '',
                //     office_name: '',
                // })
                ar: this.getNewArray(JSON.parse(this.array), this.did)
                //ar: JSON.parse(this.array),
            };
        },
        methods: {
            // or as a method
            getNewArray(arr, id) {
                return arr.filter(item => item.id == id);
            }
        },
        computed: {
            // ar() {
            //     let array = JSON.parse(this.array);
            //     console.log(array);
            //     return array.filter(item => item.id == 9);
            // }
        }
    }
</script>

<style scoped>
    
</style>