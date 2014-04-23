<div ng-if="nav.selectedPage.key == 'users'" ng-controller="usersController">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#ID</th>
          <th>Display Name</th>
          <th>Slug</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="user in users">
          <td>{{ user.ID }}</td>
          <td>{{ user.display_name }}</td>
          <td>{{ user.user_nicename }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

