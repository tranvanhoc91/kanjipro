<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    @yield('title')
     @include('includes.header')
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  fixed-navbar  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

    <!-- navbar-fixed-top-->
    <!-- navbar-fixed-top-->
      @include('layout.header')
    <!-- //navbar-fixed-top-->
    
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">1 Column</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Page Layouts</a>
                </li>
                <li class="breadcrumb-item active">1 Column
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Description -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Description</h4>
    </div>
    <div class="card-body collapse in">
        <div class="card-block">
            <div class="card-text">
                <p>1 Column layout is very useful for full width page requirements i.e: Contact us, Terms &amp; Condition, Privacy policy etc..., It has Navbar with back to dashboard/home page option and footer, navigation menu will not be displayed on this layout.</p>
            </div>
        </div>
    </div>
</div>
<!--/ Description -->
<!-- CSS Classes -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">CSS Classes</h4>
    </div>
    <div class="card-body collapse in">
        <div class="card-block">
            <div class="card-text">
                <p>This table contains all classes related to the 1 column layout. This is a custom layout for full width page requirements.</p>
                <p>All these options can be set via following classes:</p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Classes</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><code>.1-column</code></th>
                                <td>You can create 1 column layout by adding <code>.1-column</code> class in <code>&lt;body&gt;</code> tag.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ CSS Classes -->
<!-- HTML Markup -->
<div class="card">
    <div class="card-header">
        <h4 class="card-title">HTML Markup</h4>
        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                <li><a data-action="close"><i class="icon-cross2"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-body collapse in">
        <div class="card-block">
            <div class="card-text">
                <p>This section contains HTML Markup to create 1 column layout. You need to add the <code>.1-column</code> class in the <code>&lt;body&gt;</code> tag as show in below markup on line no 4. Please note that 1 column layout do not have Navigation section and it has back to Dashboard or Home page link in Navbar.</p>
                <p>Robust has a ready to use starter kit, you can use this layout directly by using the starter kit pages from the <code>robust-admin/starter-kit</code> folder.</p>
                <div class="prism-show-language"><div class="prism-show-language-label">Markup</div></div><pre data-line="4" class=" language-markup"><code class=" language-markup"><span class="token doctype">&lt;!DOCTYPE html&gt;</span><span class="token lf">
</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>html</span> <span class="token attr-name">lang</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>en<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>head</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>head</span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>body</span> <span class="token attr-name">data-menu</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>vertical-menu<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>vertical-layout vertical-menu 1-column menu-expanded<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token comment" spellcheck="true">&lt;!-- navbar-fixed-top--&gt;</span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>nav</span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>navigation<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>header-navbar navbar navbar-with-menu navbar-fixed-top navbar-dark navbar-shadow navbar-border<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span>.....<span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>nav</span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token comment" spellcheck="true">&lt;!-- BEGIN Content--&gt;</span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>content app-content container-fluid<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span>.....<span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token comment" spellcheck="true">&lt;!-- END Content--&gt;</span><span class="token lf">
</span><span class="token lf">
</span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token comment" spellcheck="true">&lt;!-- START FOOTER DARK--&gt;</span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>footer</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>footer footer-dark<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span>.....<span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>footer</span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token space"> </span><span class="token comment" spellcheck="true">&lt;!-- START FOOTER DARK--&gt;</span><span class="token lf">
</span><span class="token lf">
</span><span class="token space"> </span><span class="token space"> </span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>body</span><span class="token punctuation">&gt;</span></span><span class="token lf">
</span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>html</span><span class="token punctuation">&gt;</span></span><div class=" line-highlight" data-start="4" style="top: 63px;"> 
</div></code></pre>
            </div>
        </div>
    </div>
</div>
<!--/ HTML Markup -->

        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  © 2017 <a href="https://pixinvent.com" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted &amp; Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  

</body>
</html>
