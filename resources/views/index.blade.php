<!doctype html>
<html lang="en" dir="ltr">
<x-head title="index" :stylesheets=$stylesheets >
</x-head>

<body class="font-muli theme-cyan gradient">
    <x-preloader/>
    <div id="main_content">
        <!-- Start project content area -->
        <div class="page">
            <x-header/>
            <!-- Start Page title and tab -->
            <div class="section-body">
                <div class="container-fluid">
                    <x-indicators/>
                    <div class="d-flex justify-content-between align-items-center ">
                        <div class="header-action">
                            <h1 class="page-title">Lista de activos</h1>
                        </div>
                        <ul class="nav nav-tabs page-header-tab">
                            <li class="nav-item"><a class="nav-link active" id="list-tab" data-toggle="tab" href="#list"><i class="fa fa-list-ul"></i> List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-body mt-4">
                <div class="container-fluid">
                    <div class="tab-content">
                        <x-tabs.list.lead :leads=$leads />
                    </div> 
                </div>
            </div>
            <x-footer/>
        </div>    
    </div>

    <x-scriptsjs :scripts=$scripts />
    <script>
        $(function() {
            "use strict";
            
            $('.dropify').dropify();

            var drEvent = $('#dropify-event').dropify();
            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
        });
    </script>
</body>
</html>
