<template>
  <div>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{action.toUpperCase()}}</h5>
            <button @click="reset" type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <!-- <p>Some text in the modal. {{data}}</p> -->
            <!-- <li :key="item.id" v-for="item in ar">
              {{item.code}}
              <a v-bind:href="'/hello/'+ item.id">
                <button type="button" class="btn btn-danger btn-sm">
                  <i class="fa fa-btn fa-times"></i>
                </button>
              </a>
            </li>-->
            <form :action="`office/${action}`" method="GET">
              <input type="hidden" v-model="office.id" class="form-control" name="id" />
              <div class="form-group">
                <label for="code">Code</label>
                <input
                  type="number"
                  v-model="office.code"
                  class="form-control"
                  name="code"
                  id="code"
                  :disabled="action == 'delete'"
                  required
                  autocomplete="off"
                />
              </div>
              <div class="form-group">
                <label for="office_name">Office</label>
                <input
                  type="text"
                  v-model="office.office_name"
                  class="form-control"
                  id="office_name"
                  name="office_name"
                  :disabled="action == 'delete'"
                  required
                  autocomplete="off"
                />
              </div>
              <button
                v-if="action == 'edit'"
                type="submit"
                class="btn btn-primary float-right"
              >Submit</button>
              <button
                v-else-if="action == 'delete'"
                type="submit"
                class="btn btn-danger float-right"
              >Delete</button>
              <button v-else type="submit" class="btn btn-primary float-right">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["office", "action", "reset"],
  data() {
    return {};
  },
  created() {},
  methods: {},
  computed: {}
};
</script>

<style scoped>
</style>