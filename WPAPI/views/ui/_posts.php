<div ng-if="nav.selectedPage.key == 'posts'" ng-controller="postsController">
  <div class="row">
    <select class="pull-right" style="margin-right:40px;"
      ng-options="status.label for status in statuses" 
      ng-model="selectedStatus"
      ng-change="loadPosts()"></select>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#ID</th>
          <th>Title</th>
          <th>Created</th>
          <th>Modified</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="post in posts">
          <td>{{ post.ID }}</td>
          <td>{{ post.post_title }}</td>
          <td>{{ post.post_date }}</td>
          <td>{{ post.post_modified }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
