<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
  <!-- main menu header-->
  <div class="main-menu-header">
    <input type="text" placeholder="Search" class="menu-search form-control round"/>
  </div>
  <!-- / main menu header-->

  <!-- main menu content-->
  <div class="main-menu-content">
    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
      <li class=" nav-item"><a href="{{asset('page/radical/')}}"><i class="icon-folder2"></i>
          <span data-i18n="nav.changelog.main" class="menu-title">部首 </span></a>
      </li>
      <li class=" nav-item"><a href="{{asset('page/onyomi/')}}"><i class="icon-folder2"></i>
          <span data-i18n="nav.changelog.main" class="menu-title">音読 </span></a>
      </li>
      <li class=" nav-item"><a href="{{asset('page/kakusu/')}}"><i class="icon-folder2"></i>
          <span data-i18n="nav.changelog.main" class="menu-title">画数 </span></a>
      </li>

      
      <li class=" nav-item"><a href="{{asset('page/jlpt/')}}"><i class="icon-folder2"></i>
          <span data-i18n="nav.changelog.main" class="menu-title"> JLPT 程度 </span></a>
      </li>

      <li class=" nav-item"><a href="{{asset('page/school/')}}"><i class="icon-folder2"></i>
          <span data-i18n="nav.changelog.main" class="menu-title"> 年学 </span></a>
      </li>
      <li class=" nav-item"><a href="{{asset('page/kanken/')}}"><i class="icon-folder2"></i>
          <span data-i18n="nav.changelog.main" class="menu-title"> 漢検 </span></a>
      </li>
      <li class=" nav-item"><a href="{{asset('page/topic/')}}"><i class="icon-folder2"></i>
      	<span data-i18n="nav.changelog.main" class="menu-title">話題  </span></a>
      </li>
    </ul>
    
    <!--私のフォルダ-->
    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
     
      <li class=" navigation-header">
      	<span data-i18n="nav.category.support">私のフォルダ</span>
        <i data-toggle="tooltip" data-placement="right" data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
      </li>
      <li class=" nav-item"><a href="{{asset('page/bookmark/')}}">
      	<i class="icon-bookmark3"></i>
        <span data-i18n="nav.support_raise_support.main" class="menu-title">Bookmark</span></a>
      </li>
      <li class=" nav-item"><a href="{{asset('page/tag/')}}">
      	<i class="icon-price-tag"></i>
        <span data-i18n="nav.support_documentation.main" class="menu-title">My Tag</span></a>
      </li>
    </ul>
  </div>
</div>