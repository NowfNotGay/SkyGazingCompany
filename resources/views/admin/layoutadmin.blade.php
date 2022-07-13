<!DOCTYPE html>
<html 
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{Asset('assets')}}"
    data-template="vertical-menu-template-free">
    <head>
        @include('admin.blocks.head')
        <script>
            function deleteConfirm(){
               if(window.confirm("Do you want to delete this")==true){
                   return true;
               }
               return false;
            }
        </script>
    </head>

    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                
                @include('admin.blocks.aside')
              
                <div class="layout-page">
                    

                   @include('admin.blocks.navbar')

                   @yield('content')
                </div>
               
            </div>

            
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
       
        @include('admin.blocks.foot')
    </body>
</html>
