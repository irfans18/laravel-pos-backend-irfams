<div class="main-sidebar sidebar-style-2">
   <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
         <a href="index.html">CBT TPA</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
         <a href="index.html">CT</a>
      </div>
      <ul class="sidebar-menu">
         <li class="menu-header">Dashboard</li>
         <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
               <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                  <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
               </li>
               <li class="{{ Request::is('dashboard-ecommerce-dashboard') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ url('dashboard-ecommerce-dashboard') }}">Ecommerce Dashboard</a>
               </li>
            </ul>
         </li>
         <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
            <ul class="dropdown-menu">
               <li >
                  <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
               </li>
               <li >
                  <a class="nav-link" href="{{ route('user.create') }}">Create User</a>
               </li>
            </ul>
         </li>
         <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Questions</span></a>
            <ul class="dropdown-menu">
               <li >
                  <a class="nav-link" href="{{ route('question.index') }}">All Questions</a>
               </li>
               <li >
                  <a class="nav-link" href="{{ route('question.create') }}">Create Questions</a>
               </li>
            </ul>
         </li>
      </ul>

   </aside>
</div>