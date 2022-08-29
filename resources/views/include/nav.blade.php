<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand text-light" href="{{route('welcome')}}"><b>Job Portal</b></a>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item ml-4 active ">
              <a class="nav-link text-light" href="{{route('factories.index')}}">Factory</a>
            </li>
            <li class="nav-item ml-4 active">
              <a class="nav-link text-light" href="{{route('countries.index')}}">Country</a>
            </li>
            <li class="nav-item ml-4 active">
              <a class="nav-link text-light" href="{{route('workers.index')}}">Worker</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0 text-center">
            <button class="btn btn-primary">Post a Job</button>
            <button class="btn btn-success">Want a Job</button>
          </form>
        </div>
      </nav>