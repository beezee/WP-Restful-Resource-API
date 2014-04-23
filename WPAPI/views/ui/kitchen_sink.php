<div class="container-fluid" ng-app="kitchenSink">
  <div class="row" ng-controller="navController">
    <div class="col-sm-3 col-md-2 sidebar">
      <br />
      <br />
      <br />
      <ul class="nav nav-sidebar">
        <li ng-repeat="page in pages" ng-class="{active: 'page == selectedPage'}">
          <a href="#" ng-click="nav.selectedPage=page">{{page.title}}</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-9 col-md-10">
      <div class="row">
        <br />
        <h1 class="page-header">{{ selectedPage.title }}</h1>
      </div>
      <?php $this->render_partial('\\ui\_posts'); ?>
      <?php $this->render_partial('\\ui\_users'); ?>
      <?php $this->render_partial('\\ui\_taxonomy', array('tax' => 'tag', 'tax_plural' => 'tags')); ?>
      <?php $this->render_partial('\\ui\_taxonomy', array('tax' => 'category', 'tax_plural' => 'categories')); ?>
    </div>
  </div>
</div>
