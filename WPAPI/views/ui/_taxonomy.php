<div ng-if="nav.selectedPage.key == '<?php echo $tax_plural; ?>'" ng-controller="<?php echo $tax_plural; ?>Controller">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#ID</th>
          <th>Name</th>
          <th>Slug</th>
          <th>Post Count</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="<?php echo $tax; ?> in <?php echo $tax_plural; ?>">
          <td>{{ <?php echo $tax; ?>.term_id }}</td>
          <td>{{ <?php echo $tax; ?>.term.name }}</td>
          <td>{{ <?php echo $tax; ?>.term.slug }}</td>
          <td>{{ <?php echo $tax; ?>.count }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


