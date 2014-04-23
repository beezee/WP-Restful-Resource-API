(function(){

  var app = angular.module('kitchenSink', ['ngResource']);

  app.controller('navController', ['$scope', function($scope){
    $scope.pages = [
      {title: 'Posts', key: 'posts'},
      {title: 'Users', key: 'users'},
      {title: 'Tags', key: 'tags'},
      {title: 'Categories', key: 'categories'},
    ];
    
    $scope.nav = {};
    $scope.nav.selectedPage = _.first($scope.pages);
  }]);

  app.factory('Posts', ['$resource', function($resource){
    return $resource('/api/posts/:postId', {postId: '@id'});
  }]);

  app.factory('Users', ['$resource', function($resource){
    return $resource('/api/users/:userId', {userId: '@id'});
  }]);

  app.factory('Tags', ['$resource', function($resource){
    return $resource('/api/tags/:tagId', {tagId: '@id'});
  }]);

  app.factory('Categories', ['$resource', function($resource){
    return $resource('/api/categories/:categoryId', {categoryId: '@id'});
  }]);

  app.controller('postsController', ['$scope', 'Posts', function($scope, Posts){

    $scope.statuses = [
      { value: 'publish', label: 'Published' },
      { value: 'draft', label: 'Draft' },
      { value: 'trash', label: 'Trash' }
    ]

    $scope.selectedStatus = _.first($scope.statuses);

    $scope.loadPosts = function() {
      $scope.posts = Posts.query({post_status: $scope.selectedStatus.value});
    };
    $scope.loadPosts();
  }]);

  app.controller('usersController', ['$scope', 'Users', function($scope, Users){
    $scope.users = Users.query();
  }]);

  app.controller('tagsController', ['$scope', 'Tags', function($scope, Tags){
    $scope.tags = Tags.query();
  }]);

  app.controller('categoriesController', ['$scope', 'Categories', function($scope, Categories){
    $scope.categories = Categories.query();
  }]);
})();
