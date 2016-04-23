@extends('base.main')
@section('title', 'Principal')
@section('principal', 'active')

@section('content')

    <!-- Page Content -->
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Principal</h1>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">26</div>
                    <div>New Comments!</div>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">12</div>
                    <div>New Tasks!</div>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">124</div>
                    <div>New Orders!</div>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-support fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">13</div>
                    <div>Support Tickets!</div>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              Default Buttons
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <h4>Normal Buttons</h4>
              <p>
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-link">Link</button>
              </p>
              <br>
              <h4>Disabled Buttons</h4>
              <p>
                <button type="button" class="btn btn-default disabled">Default</button>
                <button type="button" class="btn btn-primary disabled">Primary</button>
                <button type="button" class="btn btn-success disabled">Success</button>
                <button type="button" class="btn btn-info disabled">Info</button>
                <button type="button" class="btn btn-warning disabled">Warning</button>
                <button type="button" class="btn btn-danger disabled">Danger</button>
                <button type="button" class="btn btn-link disabled">Link</button>
              </p>
              <br>
              <h4>Button Sizes</h4>
              <p>
                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                <button type="button" class="btn btn-primary">Default button</button>
                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                <button type="button" class="btn btn-primary btn-xs">Mini button</button>
                <br>
                <br>
                <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
              </p>
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              Circle Icon Buttons with Font Awesome Icons
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <h4>Normal Circle Buttons</h4>
              <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i>
              </button>
              <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
              </button>
              <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
              </button>
              <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i>
              </button>
              <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
              </button>
              <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i>
              </button>
              <br>
              <br>
              <h4>Large Circle Buttons</h4>
              <button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
              </button>
              <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
              </button>
              <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
              </button>
              <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i>
              </button>
              <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i>
              </button>
              <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i>
              </button>
              <br>
              <br>
              <h4>Extra Large Circle Buttons</h4>
              <button type="button" class="btn btn-default btn-circle btn-xl"><i class="fa fa-check"></i>
              </button>
              <button type="button" class="btn btn-primary btn-circle btn-xl"><i class="fa fa-list"></i>
              </button>
              <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-link"></i>
              </button>
              <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-check"></i>
              </button>
              <button type="button" class="btn btn-warning btn-circle btn-xl"><i class="fa fa-times"></i>
              </button>
              <button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-heart"></i>
              </button>
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              Outline Buttons with Smooth Transition
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <h4>Outline Buttons</h4>
              <p>
                <button type="button" class="btn btn-outline btn-default">Default</button>
                <button type="button" class="btn btn-outline btn-primary">Primary</button>
                <button type="button" class="btn btn-outline btn-success">Success</button>
                <button type="button" class="btn btn-outline btn-info">Info</button>
                <button type="button" class="btn btn-outline btn-warning">Warning</button>
                <button type="button" class="btn btn-outline btn-danger">Danger</button>
                <button type="button" class="btn btn-outline btn-link">Link</button>
              </p>
              <br>
              <h4>Outline Button Sizes</h4>
              <p>
                <button type="button" class="btn btn-outline btn-primary btn-lg">Large button</button>
                <button type="button" class="btn btn-outline btn-primary">Default button</button>
                <button type="button" class="btn btn-outline btn-primary btn-sm">Small button</button>
                <button type="button" class="btn btn-outline btn-primary btn-xs">Mini button</button>
                <br>
                <br>
                <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Block level button</button>
              </p>
            </div>
            <!-- /.panel-body -->
          </div>
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->


      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@stop