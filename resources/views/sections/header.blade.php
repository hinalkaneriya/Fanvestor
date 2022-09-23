<header class="header fixed w-full z-9">
  @if(isset($mega_menu_bg_image))
    <div class="full-menu" style="background-image:url('{!! $mega_menu_bg_image['url'] !!}');">
  @else
    <div class="full-menu" style="background-image:url('@('images/menu-shadow.png')');">
  @endif
    <nav id="menu" class="menu relative xlscreen:overflow-auto xlscreen:pb-100 max-w-calc_100_110 m-auto xlscreen:w-full xlscreen:top-80 xlscreen:h-[90vh] xlscreen:max-w-calc_100_40">
      <ul class="flex xlscreen:flex-col xlscreen:max-w-full m-auto">
        @if(isset($main_mega_menu))
          @foreach($main_mega_menu as $menu)
            <li class="menu-link min-w-[220px]">
              <h4 class="menu-title font-Roc text-41 tracking-[0.049em] uppercase font-black flex items-center h-[90px] border-b-2 border-black mb-30 pr-15 mx-0 laptop:text-24 xlscreen:pl-0 xlscreen:h-auto xlscreen:py-10 xlscreen:mb-20">
                <a href="{!! $menu['menu_group_name']['url'] !!}">
                  @php $final= $menu['menu_group_name']['title'] @endphp
                  <?php echo wpautop($final, true);?>
                </a>               
              </h4>              
              <ul class="submenu">
                @if(isset($menu['inner_sub_menu']))
                  @foreach($menu['inner_sub_menu'] as $subMenu)
                    <li class="submenu-title uppercase font-Grantha font-normal text-20 tracking-[0.049em]">
                      <a href="{!! $subMenu['sub_menu_name']['url'] !!}"><?php echo nl2br($subMenu['sub_menu_name']['title'],false); ?></a>
                    </li>
                  @endforeach
                @endif
              </ul>
            </li>
          @endforeach
        @endif
      </ul>
    </nav>
  </div>
  <div class="flex items-center pt-35 mx-auto max-w-calc_100_120 mdscreen2:max-w-calc_100_40 pb-20 border-b-1 mdscreen2:pt-[25px]">
    <div class="logo lgscreen:pt-0 z-9 lgscreen:ml-0">
      @if(isset($header_logo))
        <a href="{!! esc_url(home_url()) !!}">
          <img src="{!! $header_logo['url'] !!}" class="max-w-275 normal-logo mdscreen2:max-w-[180px] mdscreen2:max-w-[130px]" alt="Logo">
        </a>
      @endif
    </div>
    <div class="navbar-icon flex flex-col justify-center cursor-pointer hamburguer  ml-20">
      <span class="w-40 mdscreen:w-20 lines line-top"></span>
      <span class="w-40 mdscreen:w-20 lines line-mid"></span>
      <span class="w-40 mdscreen:w-20 lines line-bottom"></span>
    </div>
    @if(isset($creators_link))
      <div class="link flex justify-center ml-25 relative top-5">
        <a href="{!! $creators_link['url'] !!}" class="link-head tracking-[.049em] uppercase text-16 text-black font-Grantha leading-none">{!! $creators_link['title'] !!}</a>
      </div>
    @endif
  </div>
</header>
