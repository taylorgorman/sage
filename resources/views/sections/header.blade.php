<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @php($wp_nav_menu_name = 'primary_navigation')
  @if (has_nav_menu($wp_nav_menu_name))
    {!! wp_nav_menu([
      'theme_location' => $wp_nav_menu_name,
      'container' => 'nav',
      'container_class' => $wp_nav_menu_name,
      'container_aria_label' => wp_get_nav_menu_name($wp_nav_menu_name),
      'menu_class' => 'nav',
      'echo' => false,
    ]) !!}
  @endif
</header>
