<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('head')
    <title> @yield('title')</title>

</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header-container container">
                @include('logo')
                <nav class="@if(isset($page) && $page != 'home') black @endif">
                    <ul>
                        <li>
                            <a href="/" class="@if(isset($page) && $page == 'home') active @endif">Acasă</a>
                        </li>
                        <li>
                            <a href="{{route('auto')}}" class="@if(isset($page) && str_contains($page, 'auto') == true ) active @endif">Automobile</a>
                        </li>
                        <li>
                            <a href="{{route('credit')}}" class="@if(isset($page) && $page == 'credit') active @endif">Cumpără în rate</a>
                        </li>
                        <li>
                            <a href="{{route('contacts')}}" class="@if(isset($page) && $page == 'contacts') active @endif">Contacte</a>
                        </li>
                    </ul>
                </nav>

                <div class="nav-actions">
                    <div class="favorites-btn">
                        <button class="@if(isset($page) && $page != 'home') black @endif" >Favorites <span>2</span></button>
                    </div>

                    <div class="nav-icons">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.53223 14.0332C8.92969 14.0332 10.2393 13.6113 11.3291 12.8906L15.1787 16.749C15.4336 16.9951 15.7588 17.1182 16.1104 17.1182C16.8398 17.1182 17.376 16.5469 17.376 15.8262C17.376 15.4922 17.2617 15.167 17.0156 14.9209L13.1924 11.0801C13.9834 9.95508 14.4492 8.59277 14.4492 7.11621C14.4492 3.31055 11.3379 0.199219 7.53223 0.199219C3.73535 0.199219 0.615234 3.31055 0.615234 7.11621C0.615234 10.9219 3.72656 14.0332 7.53223 14.0332ZM7.53223 12.1875C4.74609 12.1875 2.46094 9.90234 2.46094 7.11621C2.46094 4.33008 4.74609 2.04492 7.53223 2.04492C10.3184 2.04492 12.6035 4.33008 12.6035 7.11621C12.6035 9.90234 10.3184 12.1875 7.53223 12.1875Z" fill="@if(isset($page) && $page != 'home') #282828 @else #fff @endif"/>
                            </svg>
                        <div class="lang">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9912 22.7422C18.9746 22.7422 23.0879 18.6289 23.0879 13.6543C23.0879 8.67969 18.9658 4.56641 13.9824 4.56641C9.00781 4.56641 4.90332 8.67969 4.90332 13.6543C4.90332 18.6289 9.0166 22.7422 13.9912 22.7422ZM8.7002 8.14355C9.57031 7.30859 10.6426 6.66699 11.8291 6.30664C11.2051 6.93066 10.6777 7.81836 10.2822 8.89062C9.66699 8.69727 9.13086 8.44238 8.7002 8.14355ZM16.1621 6.31543C17.3486 6.67578 18.4121 7.30859 19.2822 8.15234C18.8516 8.45117 18.3242 8.69727 17.709 8.89941C17.3135 7.81836 16.7861 6.93945 16.1621 6.31543ZM11.5039 9.19824C11.9873 7.90625 12.6465 6.95703 13.376 6.61426V9.3916C12.708 9.36523 12.084 9.30371 11.5039 9.19824ZM14.6064 6.61426C15.3359 6.95703 16.0039 7.90625 16.4785 9.19824C15.9072 9.30371 15.2744 9.36523 14.6064 9.3916V6.61426ZM6.35352 13.0391C6.47656 11.5537 7.03027 10.1826 7.8916 9.05762C8.41895 9.45312 9.11328 9.7959 9.92188 10.0508C9.69336 10.9561 9.55273 11.9668 9.50879 13.0391H6.35352ZM18.4736 13.0391C18.4385 11.9668 18.2891 10.9561 18.0605 10.0508C18.8691 9.7959 19.5635 9.45312 20.0908 9.05762C20.9521 10.1826 21.5059 11.5537 21.6289 13.0391H18.4736ZM14.6064 13.0391V10.6221C15.3887 10.5957 16.1445 10.5078 16.8389 10.3672C17.041 11.1846 17.1816 12.0898 17.2168 13.0391H14.6064ZM10.7656 13.0391C10.8096 12.0898 10.9414 11.1846 11.1436 10.3672C11.8467 10.5078 12.5938 10.5957 13.376 10.6221V13.0391H10.7656ZM6.35352 14.2695H9.50879C9.54395 15.3594 9.69336 16.3789 9.93066 17.3018C9.13086 17.5566 8.43652 17.8906 7.90918 18.2773C7.03906 17.1436 6.47656 15.7637 6.35352 14.2695ZM10.7656 14.2695H13.376V16.7305C12.6025 16.7568 11.8467 16.8447 11.1523 16.9854C10.9414 16.1504 10.8096 15.2275 10.7656 14.2695ZM14.6064 16.7305V14.2695H17.2256C17.1816 15.2275 17.041 16.1504 16.8301 16.9854C16.1357 16.8447 15.3887 16.7568 14.6064 16.7305ZM18.0605 17.3018C18.2891 16.3789 18.4385 15.3594 18.4824 14.2695H21.6289C21.5059 15.7637 20.9434 17.1436 20.0732 18.2773C19.5459 17.8906 18.8604 17.5566 18.0605 17.3018ZM14.6064 17.9609C15.2744 17.9873 15.8896 18.0488 16.4697 18.1543C15.9951 19.4199 15.3359 20.3604 14.6064 20.7031V17.9609ZM11.5215 18.1543C12.0928 18.0488 12.7168 17.9873 13.376 17.9609V20.7031C12.6553 20.3604 11.9961 19.4199 11.5215 18.1543ZM8.72656 19.1826C9.15723 18.8926 9.68457 18.6465 10.291 18.4531C10.6777 19.5078 11.2051 20.3779 11.8115 20.9932C10.6426 20.6416 9.58789 20.0088 8.72656 19.1826ZM17.7002 18.4531C18.3066 18.6465 18.834 18.8926 19.2646 19.1826C18.3945 20.0088 17.3398 20.6416 16.1709 20.9932C16.7861 20.3779 17.3047 19.5078 17.7002 18.4531Z" fill="@if(isset($page) && $page != 'home') #282828 @else #fff @endif"/>
                                </svg>                                
                            <div class="circle">
                                RO
                            </div>
                        </div>
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.8965 4.68945C14.8965 4.20605 14.4834 3.79297 14 3.79297C13.5166 3.79297 13.1123 4.20605 13.1123 4.68945V6.47363C13.1123 6.95703 13.5166 7.36133 14 7.36133C14.4834 7.36133 14.8965 6.95703 14.8965 6.47363V4.68945ZM18.4121 7.95898C18.0693 8.30176 18.0693 8.87305 18.4209 9.21582C18.7549 9.55859 19.335 9.55859 19.6777 9.20703L20.9434 7.94141C21.2861 7.60742 21.2861 7.01855 20.9434 6.67578C20.6006 6.3418 20.0293 6.3418 19.6865 6.68457L18.4121 7.95898ZM8.32227 9.20703C8.65625 9.55859 9.23633 9.55859 9.5791 9.21582C9.92188 8.88184 9.92188 8.29297 9.58789 7.95898L8.32227 6.68457C7.98828 6.35059 7.4082 6.3418 7.06543 6.67578C6.72266 7.01855 6.72266 7.60742 7.05664 7.93262L8.32227 9.20703ZM14 8.9873C11.4688 8.9873 9.36816 11.0791 9.36816 13.6191C9.36816 16.1592 11.4688 18.251 14 18.251C16.5312 18.251 18.623 16.1592 18.623 13.6191C18.623 11.0791 16.5312 8.9873 14 8.9873ZM14 10.6484C15.6172 10.6484 16.9707 11.9932 16.9707 13.6191C16.9707 15.2451 15.6172 16.5898 14 16.5898C12.374 16.5898 11.0205 15.2451 11.0205 13.6191C11.0205 11.9932 12.374 10.6484 14 10.6484ZM22.9209 14.5156C23.4043 14.5156 23.8086 14.1025 23.8086 13.6191C23.8086 13.1357 23.4043 12.7314 22.9209 12.7314H21.1367C20.6533 12.7314 20.249 13.1357 20.249 13.6191C20.249 14.1025 20.6533 14.5156 21.1367 14.5156H22.9209ZM5.08789 12.7314C4.5957 12.7314 4.19141 13.1357 4.19141 13.6191C4.19141 14.1025 4.5957 14.5156 5.08789 14.5156H6.86328C7.34668 14.5156 7.75977 14.1025 7.75977 13.6191C7.75977 13.1357 7.34668 12.7314 6.86328 12.7314H5.08789ZM19.6689 18.0312C19.3262 17.6885 18.7549 17.6973 18.4121 18.04C18.0693 18.374 18.0693 18.9453 18.4209 19.2969L19.6953 20.5625C20.0293 20.9053 20.6094 20.8965 20.9521 20.5537C21.2861 20.2109 21.2861 19.6396 20.9434 19.2969L19.6689 18.0312ZM7.05664 19.2881C6.71387 19.6309 6.70508 20.2109 7.03906 20.5449C7.38184 20.8877 7.9707 20.8965 8.30469 20.5625L9.5791 19.2969C9.92188 18.9541 9.92188 18.374 9.58789 18.04C9.24512 17.6973 8.66504 17.6973 8.32227 18.0312L7.05664 19.2881ZM14.8965 20.7646C14.8965 20.2812 14.4834 19.877 14 19.877C13.5166 19.877 13.1123 20.2812 13.1123 20.7646V22.5488C13.1123 23.0322 13.5166 23.4453 14 23.4453C14.4834 23.4453 14.8965 23.0322 14.8965 22.5488V20.7646Z" fill="@if(isset($page) && $page != 'home') #282828 @else #fff @endif"/>
                            </svg>
                            
                        <div class="nav-menu">
                            <div class="lines">
                                <div class="line @if(isset($page) && $page == 'home') white @endif"></div>
                                <div class="line @if(isset($page) && $page == 'home') white @endif"></div>
                                <div class="line @if(isset($page) && $page == 'home') white @endif"></div>
                            </div>

                            <div class="menu">
                                <div class="nav-intro">
                                    <h4>Menu</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="/">Acasă</a>
                                    </li>
                                    <li>
                                        <a href="{{route('auto')}}">Automobile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('credit')}}">Cumpără în rate</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contacts')}}">Contacte</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            @yield('content')
        </main>
        <footer class="footer">
            <section class="logo-links">
                <div class="links-container container">
                    <div class="footer-logo">
                        <a href="/"><img src="/assets/images/footer/footerLogo.svg" loading="lazy" alt="Nobil Auto"></a>
                    </div>
    
                    <div class="footer-links">
                        <ul>
                            <h4>Menu</h4>
                            <li>
                                <a href="/">Acasă</a>
                            </li>
                            <li>
                                <a href="{{route('auto')}}">Automobile</a>
                            </li>
                            <li>
                                <a href="{{route('credit')}}">Cumpără în rate</a>
                            </li>
                            <li>
                                <a href="{{route('contacts')}}">Contacte</a>
                            </li>
                        </ul>
                        <ul>
                            <h4>Program de lucru</h4>
                            <li>
                                <p>Luni - Duminică</p>
                            </li>
                            <li>
                                <p>de la 08:00 pînă la 18:00</p>
                            </li>
                        </ul>
                        <ul>
                            <h4>Contacte</h4>
                            <li>
                                <p>mun. Chișinău, str. <br> Studenților 7/7</p>
                            </li>
                            <li>
                                <a href="#">+373 61 25 22 22</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="copy">
                <div class="copy-container container">
                    <div class="socials">
                        <div class="social-img">
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="social-img">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="copyright">
                        <p>&copy;2019 - 2023 NobilAuto.md | All Rights Reserved</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>
    @include('scripts')
</body>
</html>