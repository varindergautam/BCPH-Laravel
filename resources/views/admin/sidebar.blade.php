<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{ (Request::segment(2) == "dashboard") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>


          {{-- <li class="nav-item has-treeview menu-{{ (Request::segment(2) == "subcategory") ? "open" : "close" }}">

            <a href="#" class="nav-link {{ (Request::segment(2) == "subcategory") ? "active" : '' }}">

              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>

                Medicine Sub Category

                <i class="right fas fa-angle-left"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="" class="nav-link {{ (Request::segment(3) == "create") ? "active" : '' }}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Add</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="" class="nav-link {{ (Request::segment(3) == "list") ? "active" : '' }}">

                  <i class="far fa-circle nav-icon"></i>

                  <p>List</p>

                </a>

              </li>

            </ul>

          </li> --}}

          <li class="nav-item">
            <a href="{{ route('admin.user.list') }}" class="nav-link {{ (Request::segment(2) == "user") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Users</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.fee.list') }}" class="nav-link {{ (Request::segment(2) == "fee") && (Request::segment(3) == "") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Fees</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.fee.tatkaalFee') }}" class="nav-link {{ (Request::segment(2) == "fee") && (Request::segment(3) == "tatkaal") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Tatkaal Fees</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.university.list') }}" class="nav-link {{ (Request::segment(2) == "university") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Universities</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.college.list') }}" class="nav-link {{ (Request::segment(2) == "college") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Colleges</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.city.list') }}" class="nav-link {{ (Request::segment(2) == "city") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>City</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('admin.signature.create') }}" class="nav-link {{ (Request::segment(2) == "signature") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Signature</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.insurance.list') }}" class="nav-link {{ (Request::segment(2) == "insurance") ? "active" : '' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Insurance</p>
            </a>
          </li>



                      {{-- code by dishant and kamlesh --}}

                      <li class="nav-item">
                        <a href="{{ route('admin.id_card.list') }}" class="nav-link {{ (Request::segment(2) == "id_card") ? "active" : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>ID Card</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ route('admin.regular.list') }}" class="nav-link {{ (Request::segment(2) == "regular") ? "active" : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Regular</p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="{{ route('admin.continuity.list') }}" class="nav-link {{ (Request::segment(2) == "continuity") ? "active" : '' }}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Continuity</p>
                        </a>
                      </li>


    </ul>
  </nav>
