<div class="col-12 col-md-10 p-0">
    <div class="top-header">
        <div class="search-form">
            <form action="">
                @csrf
                <table class="table table-responsive">
                    <tr>
                        <td><input type="search" name="search" class="form-control" placeholder="Search"></td>
                        <td id="icon"><i class="fas fa-search"></i></td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="top-header-icon">
            <a href="javascript:void(0)"><i class="fas fa-expand-arrows-alt"></i></a>
            <a href="javascript:void(0)"><i class="fas fa-bell" id="top-header-icon"></i>
                <span id="bell-notification">8</span>
            </a>
            <a href="javascript:void(0)"><i class="fas fa-envelope" id="top-header-icon"></i>
                <span id="envelope-notification">5</span>
            </a>
            <a href="javascript:void(0)"><i class="fas fa-cog" id="top-header-icon1"></i>
                <span id="cog-notification">5</span>
            </a>
        </div>

        <div class="user pl-0">
            <div class="avatar" id="admin_log">

                @if (session()->has('admin'))
                    <span><b>Admin</b> </span>
                @else
                    <span><b>Not Admin</b> </span>
                @endif
                
                <img src="{{url('img/avtar.webp')}}" alt="avatar" height="37px" width="35px">
                <a href="{{ route('adminLogout') }}">
                    <span id="logout-link"><i class="fas fa-lock"></i> Logout</span>
                </a>
            </div>
        </div>
    </div>