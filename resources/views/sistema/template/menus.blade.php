 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegação Principal</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Principal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          </li>
          <li>
          <a href="{{route('turma.index')}}">
          <i class="fa fa-files-o"></i>
          <span>Turma</span>
          <span class="pull-right-container">
          </span>
          </a>
          </li>

          <li>
          <a href="{{route('periodo.index')}}">
          <i class="fa fa-files-o"></i>
          <span>Periodo</span>
          <span class="pull-right-container">
          </span>
          </a>
          </li>

          <li>
          <a href="{{route('periodo.index')}}">
          <i class="fa fa-files-o"></i>
          <span>Período</span>
          <span class="pull-right-container">
          </span>
          </a>
          </li>
         <li class="treeview">
         <a href="#">
         <i class="fa fa-pie-chart"></i>
         <span>Cursos</span>
         <span class="pull-right-container">
         <i class="fa fa-angle-left pull-right"></i>
         </span>
         </a>

         <ul class="treeview-menu">
         <li><a href="{{route('periodo.index')}}"><i class="fa fa-circle-o"></i>Cursos Períodos</a></li>

         </ul>
         </li>

         <li class="treeview">
         <a href="#">
         <i class="fa fa-user"></i>
         <span>Alunos</span>
         <span class="pull-right-container">
         <i class="fa fa-angle-left pull-right"></i>
         </span>
         </a>
         <ul class="treeview-menu">
         <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i>Inscrever</a></li>
         <li><a href="../UI/general.html"><i class="fa fa-cicle-o"></i>Matricular</a></li>
         </ul>
         </li>
         <li class="treeview">
         <a href="#">
         <i class="fa fa-files-o"></i>
         <span>Funcionário</span>
         <span class="pull-right-container"></span>
         </a>
         </li>
         </ul>   
    </section>
    <!-- /.sidebar -->
  </aside>