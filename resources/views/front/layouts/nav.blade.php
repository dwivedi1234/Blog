<!-- header section start -->
<div class="header_section">
    <div class="container-fluid header_main">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="logo" href="{{route('index')}}"><img src="{{asset('assets/images/logo.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                   <a class="nav-link" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('page','about')}}">About</a>
                </li>
                
                <li class="nav-item">
                   <a class="nav-link" href="{{route('page','contact')}}">Contact Us</a>
                </li>
                
                <li>
                  <form class="form-inline" action="{{route('search')}}" method="GET">
                     {{ csrf_field() }}

                     <div class="form-group">
                      
                       <input type="text" name="keyword" value="{{@$keyword}}" class="form-control" id="inputPassword2" placeholder="Search Blog"> &nbsp;
                       <button type="submit" class="btn btn-primary">Search</button>
                     </div>
                   </form>


                  
                </li>
                
             </ul>
          </div>
       </nav>
    </div>
    
 </div>