@extends('layouts.app')
@section('title')
    Nobil Auto
@endsection
@section('content')
    <div class="home-wrapper">
        <section class="banner">
            <div class="banner-container container">
                <div class="banner-titles">
                    <h1 data-aos="fade-in" data-aos-delay="100">Simplu și Eficient</h1>
                    <h3 data-aos="fade-in" data-aos-delay="500">în găsirea mașinii
                        potrivite</h3>
                </div>
                <form data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                    <div class="select-dropdown">
                        <div class="select-btn">
                            <input type="checkbox" id="select-1" name="dropdown" />
                            <label class="selected" for="select-1">
                                Status
                                <i class="caret fa-solid fa-chevron-down"></i>
                            </label>
                            <div class="dropdown-options">
                                <p>Option 1</p>
                                <p>Option 2</p>
                                <p>Option 3</p>
                            </div>
                        </div>
                    </div>
                        <div class="select-dropdown">
                            <div class="select-btn">
                                <input type="checkbox" id="select-2" name="dropdown" />
                                <label class="selected" for="select-2">
                                    Producător
                                    <i class="caret fa-solid fa-chevron-down"></i>
                                </label>
                            </div>
                            <div class="dropdown-options">
                                <p>Option 1</p>
                                <p>Option 2</p>
                                <p>Option 3</p>
                            </div>
                        </div>
                        <div class="select-dropdown">
                            <div class="select-btn">
                                <input type="checkbox" id="select-3" name="dropdown" />
                                <label class="selected" for="select-3">
                                    Model
                                    <i class="caret fa-solid fa-chevron-down"></i>
                                </label>
                            </div>
                            <div class="dropdown-options">
                                <p>Option 1</p>
                                <p>Option 2</p>
                                <p>Option 3</p>
                            </div>
                        </div>
                        <div class="select-dropdown">
                            <div class="select-btn">
                                <input type="checkbox" id="select-4" name="dropdown" />
                                <label class="selected" for="select-4">
                                    Cutie
                                    <i class="caret fa-solid fa-chevron-down"></i>
                                </label>
                            </div>
                            <div class="dropdown-options">
                                <p>Option 1</p>
                                <p>Option 2</p>
                                <p>Option 3</p>
                            </div>
                        </div>
                        <div class="filter-btn">
                            <button>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.53223 14.0332C8.92969 14.0332 10.2393 13.6113 11.3291 12.8906L15.1787 16.749C15.4336 16.9951 15.7588 17.1182 16.1104 17.1182C16.8398 17.1182 17.376 16.5469 17.376 15.8262C17.376 15.4922 17.2617 15.167 17.0156 14.9209L13.1924 11.0801C13.9834 9.95508 14.4492 8.59277 14.4492 7.11621C14.4492 3.31055 11.3379 0.199219 7.53223 0.199219C3.73535 0.199219 0.615234 3.31055 0.615234 7.11621C0.615234 10.9219 3.72656 14.0332 7.53223 14.0332ZM7.53223 12.1875C4.74609 12.1875 2.46094 9.90234 2.46094 7.11621C2.46094 4.33008 4.74609 2.04492 7.53223 2.04492C10.3184 2.04492 12.6035 4.33008 12.6035 7.11621C12.6035 9.90234 10.3184 12.1875 7.53223 12.1875Z"
                                        fill="white" />
                                </svg>
                                <span>Caută</span>
                            </button>
                        </div>
                </form>
            </div>
        </section>

        <section class="categories">
            <div class="category-container container" data-aos="fade-up" data-aos-delay="100" data-aos-delay="500">
                <div class="category-swiper owl-carousel owl-categories">
                    <a href="#" class="item">
                        <div class="category-box">
                            <svg width="82" height="29" viewBox="0 0 82 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M70.701 24.672C72.681 12.202 55.391 13.722 57.841 24.452C57.8576 24.5241 57.8577 24.5989 57.8413 24.671C57.8249 24.743 57.7923 24.8104 57.7462 24.8682C57.7 24.9259 57.6414 24.9724 57.5747 25.0042C57.508 25.0361 57.4349 25.0524 57.361 25.052L21.371 25.072C21.2962 25.0722 21.2222 25.0569 21.1534 25.0269C21.0846 24.9969 21.0226 24.953 20.9711 24.8978C20.9196 24.8425 20.8798 24.7772 20.854 24.7057C20.8282 24.6342 20.817 24.5581 20.821 24.482C20.981 22.072 20.951 19.412 18.811 17.812C13.321 13.692 6.40103 17.842 7.85103 24.592C7.86666 24.658 7.86487 24.7268 7.84582 24.7919C7.82678 24.857 7.7911 24.9163 7.74213 24.9643C7.69316 25.0123 7.63251 25.0473 7.56586 25.0661C7.4992 25.085 7.42873 25.087 7.36103 25.072L2.09103 23.822C1.55103 23.6954 1.17437 23.3754 0.961033 22.862C-1.58897 16.842 1.13103 13.212 6.81103 11.832C10.051 11.0387 13.271 10.412 16.471 9.95204C17.9444 9.74538 19.3577 9.23538 20.711 8.42205C28.301 3.85205 36.611 0.472046 45.591 0.0920455C52.6044 -0.207954 60.641 0.225378 69.701 1.39204C75.291 2.11204 76.321 5.71205 78.991 9.81205C80.271 11.782 79.901 13.932 79.891 16.142C79.8912 16.3414 79.9311 16.5381 80.0085 16.7203C80.0858 16.9025 80.1989 17.0664 80.341 17.202C81.5344 18.3687 81.6277 19.872 80.621 21.712C80.4411 22.0389 80.1397 22.2829 79.781 22.392L71.131 25.052C71.0771 25.0703 71.0194 25.0739 70.9635 25.0625C70.9077 25.051 70.8556 25.0249 70.8124 24.9867C70.7691 24.9484 70.7361 24.8994 70.7166 24.8442C70.6971 24.7891 70.6917 24.7298 70.701 24.672ZM46.391 2.31204C46.2804 2.31193 46.1739 2.35447 46.0938 2.43084C46.0137 2.5072 45.9662 2.6115 45.961 2.72204L45.641 8.79204C45.6382 8.8519 45.6479 8.91168 45.6695 8.96757C45.6911 9.02346 45.7241 9.07422 45.7665 9.11659C45.8089 9.15896 45.8596 9.19201 45.9155 9.21361C45.9714 9.23522 46.0312 9.2449 46.091 9.24205L54.971 8.87204C55.0816 8.8669 55.1859 8.81933 55.2622 8.73924C55.3386 8.65915 55.3812 8.55271 55.381 8.44205L55.411 2.75205C55.411 2.638 55.3657 2.52863 55.2851 2.44799C55.2045 2.36735 55.0951 2.32205 54.981 2.32205L46.391 2.31204ZM27.611 7.48204C28.1444 8.15538 28.261 8.89538 27.961 9.70204C27.7944 10.1287 27.941 10.3287 28.401 10.302L41.151 9.59205C41.3844 9.57871 41.511 9.45538 41.531 9.22204L42.181 2.76205C42.1841 2.72089 42.1783 2.67953 42.1642 2.64094C42.15 2.60234 42.1278 2.56746 42.0991 2.53879C42.0705 2.51012 42.0361 2.48837 41.9983 2.47511C41.9606 2.46184 41.9206 2.45738 41.881 2.46204C36.961 3.08871 32.2444 4.57871 27.731 6.93205C27.6834 6.95554 27.6418 6.98953 27.6092 7.03157C27.5765 7.0736 27.5537 7.12266 27.5422 7.17521C27.5307 7.22777 27.531 7.28253 27.5429 7.33558C27.5548 7.38862 27.578 7.43864 27.611 7.48204ZM61.771 8.24205C61.8644 8.42205 62.0144 8.50871 62.221 8.50205C64.721 8.49205 70.091 8.73204 72.251 7.31204C72.4928 7.15204 72.6666 6.90796 72.7386 6.62712C72.8107 6.34628 72.7759 6.04869 72.641 5.79204C71.781 4.13204 70.4377 3.23538 68.611 3.10205C65.2844 2.85538 62.001 2.69871 58.761 2.63204C58.7366 2.63226 58.7126 2.63889 58.6915 2.65126C58.6704 2.66364 58.6529 2.68133 58.6407 2.70258C58.6286 2.72383 58.6222 2.74788 58.6223 2.77235C58.6223 2.79683 58.6288 2.82085 58.641 2.84205C59.761 4.68871 60.8044 6.48871 61.771 8.24205ZM58.751 8.39205C58.7044 7.97205 58.5544 7.64204 58.301 7.40204C57.9677 7.09538 57.761 7.16205 57.681 7.60205C57.5744 8.18205 57.7344 8.58204 58.161 8.80204C58.2253 8.83743 58.298 8.85401 58.3712 8.84998C58.4443 8.84595 58.5152 8.82145 58.576 8.77917C58.6369 8.73689 58.6854 8.67843 58.7162 8.61018C58.7471 8.54192 58.7591 8.46647 58.751 8.39205Z"
                                    fill="white" />
                                <path
                                    d="M64.2312 28.262C67.5173 28.262 70.1813 25.5981 70.1813 22.312C70.1813 19.026 67.5173 16.362 64.2312 16.362C60.9452 16.362 58.2812 19.026 58.2812 22.312C58.2812 25.5981 60.9452 28.262 64.2312 28.262Z"
                                    fill="white" />
                                <path
                                    d="M14.3811 28.882C17.7003 28.882 20.3911 26.1913 20.3911 22.872C20.3911 19.5528 17.7003 16.862 14.3811 16.862C11.0619 16.862 8.37109 19.5528 8.37109 22.872C8.37109 26.1913 11.0619 28.882 14.3811 28.882Z"
                                    fill="white" />
                            </svg>

                            <span>Compact</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <svg width="85" height="31" viewBox="0 0 85 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M75.5099 23.9C74.0099 13.62 59.7599 15.4 60.6699 24.88C60.7166 25.3067 60.5233 25.5267 60.0899 25.54L23.4799 26.31C23.0466 26.3233 22.8066 26.1133 22.7599 25.68C22.6699 24.85 22.8699 23.9 22.7199 23.07C20.9899 13.72 7.25993 15.46 8.23993 25.14C8.2866 25.5467 8.1066 25.7367 7.69993 25.71C5.83327 25.6033 4.04327 25.2333 2.32993 24.6C2.17298 24.5438 2.02999 24.4539 1.91086 24.3365C1.79172 24.2191 1.69928 24.077 1.63993 23.92C0.3266 20.6 0.456602 17.6567 2.02993 15.09C2.72327 13.9633 3.99993 13.1567 5.85993 12.67C9.55327 11.69 13.1266 10.8833 16.5799 10.25C18.8933 9.82333 21.1633 9.06667 23.3899 7.98C28.5099 5.47 34.1199 2.47 39.5399 1.38C46.6799 -0.0700015 53.5499 0.35 60.6799 1.69C65.5999 2.62 70.3399 4.83 74.9699 6.61C76.9899 7.39 79.2199 7.6 81.3699 7.87C81.9583 7.94435 82.5002 8.22875 82.8968 8.67123C83.2934 9.11371 83.5181 9.68474 83.5299 10.28C83.5499 11.89 83.2099 13.55 83.9799 15.03C85.4933 17.9567 85.0399 20.5967 82.6199 22.95C82.3783 23.1782 82.0724 23.3311 81.7399 23.39L76.0499 24.3C75.9881 24.3099 75.925 24.3074 75.8641 24.2925C75.8033 24.2777 75.7461 24.2509 75.6958 24.2136C75.6455 24.1763 75.6031 24.1294 75.5712 24.0756C75.5393 24.0217 75.5185 23.962 75.5099 23.9ZM61.6699 6.98C61.0399 5.54 60.3499 4.11 58.6499 3.77C55.9299 3.21667 53.2166 2.93333 50.5099 2.92C50.2699 2.92 50.1266 3.04 50.0799 3.28L48.9999 9.24C48.9533 9.49333 49.0566 9.61333 49.3099 9.6L60.2699 9.22C60.5311 9.20933 60.7859 9.13517 61.0119 9.00402C61.238 8.87287 61.4284 8.68872 61.5665 8.46769C61.7047 8.24666 61.7863 7.99548 61.8044 7.73613C61.8224 7.47678 61.7762 7.21716 61.6699 6.98ZM46.7999 3.06C41.5999 3.15 36.2599 4.45 31.8599 7.45C31.5466 7.65667 31.4333 7.94333 31.5199 8.31L31.8299 9.68C31.9099 10.0133 32.1199 10.1767 32.4599 10.17L45.2899 9.91C45.3778 9.90957 45.4632 9.87872 45.5322 9.82245C45.6011 9.76618 45.6497 9.6878 45.6699 9.6L46.9999 3.3C47.0059 3.2706 47.0053 3.24023 46.9979 3.21114C46.9906 3.18204 46.9768 3.15497 46.9576 3.13192C46.9384 3.10887 46.9143 3.09044 46.887 3.07799C46.8597 3.06554 46.8299 3.05939 46.7999 3.06ZM63.0699 5.36C63.0241 5.3451 62.9748 5.34496 62.9289 5.35959C62.883 5.37422 62.8429 5.4029 62.8142 5.44156C62.7854 5.48023 62.7696 5.52694 62.7688 5.5751C62.7681 5.62326 62.7824 5.67045 62.8099 5.71L65.1799 8.83C65.3333 9.03 65.5333 9.15333 65.7799 9.2C66.4066 9.31333 67.0099 9.28 67.5899 9.1C68.7166 8.75333 68.7999 8.23333 67.8399 7.54C66.9133 6.88 65.3233 6.15333 63.0699 5.36Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.0102 23.97C22.0102 25.7019 21.3222 27.3628 20.0976 28.5874C18.873 29.812 17.2121 30.5 15.4802 30.5C13.7483 30.5 12.0874 29.812 10.8628 28.5874C9.63817 27.3628 8.9502 25.7019 8.9502 23.97C8.9502 23.1125 9.1191 22.2633 9.44726 21.4711C9.77543 20.6788 10.2564 19.959 10.8628 19.3526C11.4692 18.7462 12.189 18.2652 12.9813 17.9371C13.7735 17.6089 14.6227 17.44 15.4802 17.44C16.3377 17.44 17.1869 17.6089 17.9791 17.9371C18.7714 18.2652 19.4912 18.7462 20.0976 19.3526C20.704 19.959 21.185 20.6788 21.5131 21.4711C21.8413 22.2633 22.0102 23.1125 22.0102 23.97Z"
                                    fill="white" />
                                <path
                                    d="M74.52 23.99C74.52 25.7219 73.832 27.3828 72.6074 28.6074C71.3828 29.832 69.7218 30.52 67.99 30.52C66.2581 30.52 64.5972 29.832 63.3726 28.6074C62.1479 27.3828 61.46 25.7219 61.46 23.99C61.46 22.2581 62.1479 20.5972 63.3726 19.3726C64.5972 18.148 66.2581 17.46 67.99 17.46C69.7218 17.46 71.3828 18.148 72.6074 19.3726C73.832 20.5972 74.52 22.2581 74.52 23.99Z"
                                    fill="white" />
                            </svg>

                            <span>Sedan</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <svg width="82" height="40" viewBox="0 0 82 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M62.3398 0.679619L39.3415 0.96061C38.5297 0.970529 37.8796 1.63666 37.8895 2.44846L37.892 2.64844C37.9019 3.46024 38.568 4.11029 39.3798 4.10038L62.3781 3.81938C63.1899 3.80947 63.84 3.14333 63.83 2.33154L63.8276 2.13155C63.8177 1.31975 63.1516 0.669701 62.3398 0.679619Z"
                                    fill="white" />
                                <path
                                    d="M57.3302 27.22C57.0502 27.84 56.6635 28.3733 56.1702 28.82C55.9035 29.06 55.5902 29.18 55.2302 29.18L24.3102 29.17C24.217 29.17 24.1252 29.1483 24.0418 29.1067C23.9585 29.065 23.8861 29.0045 23.8302 28.93L18.2402 21.51C18.0073 21.1997 17.7059 20.9485 17.3602 20.7765C17.0146 20.6046 16.6343 20.5167 16.2502 20.52L8.27018 20.58C7.88488 20.5822 7.50958 20.7047 7.1961 20.9304C6.88263 21.1561 6.64644 21.4739 6.52018 21.84C5.91351 23.6 5.26684 25.4467 4.58018 27.38C4.55351 27.46 4.54684 27.54 4.56018 27.62C4.56684 27.6533 4.56684 27.69 4.56018 27.73C4.55351 27.9433 4.58684 27.9467 4.66018 27.74C6.24684 23.42 9.24684 21.3267 13.6602 21.46C18.6502 21.61 22.6202 26.01 21.8402 31C19.9802 43 3.39018 40.86 4.55018 28.99C4.58351 28.61 4.43351 28.5133 4.10018 28.7C2.59018 29.54 0.870177 28.47 0.740177 26.72C0.65351 25.5533 0.676843 24.54 0.810177 23.68C0.98351 22.5933 1.72018 22.13 3.02018 22.29C3.44684 22.3433 3.66684 22.1567 3.68018 21.73C3.68684 21.6433 3.66018 21.5633 3.60018 21.49C3.394 21.2447 3.25054 20.9537 3.18039 20.6385C3.11023 20.3232 3.11515 19.9917 3.19479 19.6683C3.27444 19.3449 3.42677 19.038 3.64057 18.77C3.85438 18.502 4.1242 18.2799 4.43018 18.12C5.79684 17.4 6.94351 16.4367 7.87018 15.23C8.08434 14.9565 8.35455 14.7313 8.66305 14.5693C8.97155 14.4073 9.31137 14.3121 9.66018 14.29L26.7602 13.27C27.2402 13.2433 27.6235 13.04 27.9102 12.66L32.9602 6.08C33.0914 5.91172 33.2583 5.77497 33.4487 5.67979C33.639 5.58462 33.848 5.53343 34.0602 5.53L74.7402 4.92C75.3142 4.9127 75.8695 5.12219 76.2944 5.50627C76.7193 5.89035 76.9822 6.42051 77.0302 6.99L78.2102 21.23C78.2635 21.8767 78.6102 22.1567 79.2502 22.07C80.4835 21.91 81.1168 22.42 81.1502 23.6C81.2502 27 79.7102 29.69 75.8502 29.11C75.4568 29.05 75.1668 28.8433 74.9802 28.49C74.6935 27.9433 74.4468 27.3833 74.2402 26.81C74.2002 26.7167 74.1335 26.6867 74.0402 26.72H74.0302C73.9502 26.7467 73.9235 26.8 73.9502 26.88C75.1302 30.74 74.5202 33.93 72.1202 36.45C69.3902 39.32 64.6202 39.85 61.3402 37.78C57.5468 35.4067 56.2635 31.9067 57.4902 27.28C57.6568 26.64 57.6035 26.62 57.3302 27.22ZM73.3802 14.77C73.4266 14.7701 73.4725 14.7607 73.5151 14.7423C73.5577 14.724 73.5961 14.6972 73.6279 14.6635C73.6598 14.6297 73.6844 14.5898 73.7003 14.5463C73.7161 14.5027 73.7229 14.4563 73.7202 14.41L73.3602 8.13C73.3551 8.04334 73.317 7.96191 73.2538 7.90241C73.1906 7.84291 73.107 7.80985 73.0202 7.81L63.3702 7.82C63.3255 7.82 63.2813 7.82879 63.2401 7.84588C63.1988 7.86297 63.1613 7.88801 63.1298 7.91958C63.0982 7.95116 63.0731 7.98864 63.0561 8.02989C63.039 8.07114 63.0302 8.11535 63.0302 8.16V14.48C63.0302 14.5246 63.039 14.5689 63.0561 14.6101C63.0731 14.6514 63.0982 14.6888 63.1298 14.7204C63.1613 14.752 63.1988 14.777 63.2401 14.7941C63.2813 14.8112 63.3255 14.82 63.3702 14.82L73.3802 14.77ZM33.3102 13.06C33.2168 13.5 33.2002 13.93 33.2602 14.35C33.3002 14.6433 33.4668 14.79 33.7602 14.79L41.0402 14.78C41.9802 14.78 42.6335 14.3433 43.0002 13.47C43.5668 12.1233 43.8235 10.7033 43.7702 9.21C43.7502 8.47667 43.3735 8.12 42.6402 8.14L35.0102 8.35C34.4768 8.36333 34.0502 8.58333 33.7302 9.01L32.2602 10.96C31.9135 11.4333 32.0235 11.74 32.5902 11.88C32.7168 11.9133 32.8335 11.97 32.9402 12.05C33.2735 12.31 33.3968 12.6467 33.3102 13.06ZM47.9702 14.52C47.9702 14.5996 48.0018 14.6759 48.058 14.7321C48.1143 14.7884 48.1906 14.82 48.2702 14.82L56.2602 14.77C57.0754 14.7641 57.858 14.4502 58.4501 13.8916C59.0421 13.3329 59.3995 12.5712 59.4502 11.76C59.5035 10.98 59.5635 10.23 59.6302 9.51C59.7168 8.50333 59.2568 8 58.2502 8H48.2602C48.0335 8 47.9235 8.11333 47.9302 8.34L47.9702 14.52ZM72.3302 24.29C72.4168 24.4367 72.5302 24.5567 72.6702 24.65C72.9035 24.8167 72.9635 24.77 72.8502 24.51C72.8102 24.4233 72.7468 24.3533 72.6602 24.3C72.2068 23.1333 71.5368 22.13 70.6502 21.29C70.3902 21.0367 70.0768 20.91 69.7102 20.91L61.6202 20.9C61.4157 20.9002 61.2146 20.9527 61.0361 21.0525C60.8576 21.1522 60.7075 21.296 60.6002 21.47L58.8502 24.29C58.5702 24.7433 58.6235 24.79 59.0102 24.43C63.2302 20.5967 67.5335 20.3933 71.9202 23.82C72.0868 23.9467 72.2235 24.1033 72.3302 24.29Z"
                                    fill="white" />
                                <path
                                    d="M53.4598 29.75H26.1798C25.4287 29.75 24.8198 30.3589 24.8198 31.11V31.19C24.8198 31.9411 25.4287 32.55 26.1798 32.55H53.4598C54.2109 32.55 54.8198 31.9411 54.8198 31.19V31.11C54.8198 30.3589 54.2109 29.75 53.4598 29.75Z"
                                    fill="white" />
                            </svg>

                            <span>SUV</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <svg width="85" height="31" viewBox="0 0 85 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M75.5099 23.9C74.0099 13.62 59.7599 15.4 60.6699 24.88C60.7166 25.3067 60.5233 25.5267 60.0899 25.54L23.4799 26.31C23.0466 26.3233 22.8066 26.1133 22.7599 25.68C22.6699 24.85 22.8699 23.9 22.7199 23.07C20.9899 13.72 7.25993 15.46 8.23993 25.14C8.2866 25.5467 8.1066 25.7367 7.69993 25.71C5.83327 25.6033 4.04327 25.2333 2.32993 24.6C2.17298 24.5438 2.02999 24.4539 1.91086 24.3365C1.79172 24.2191 1.69928 24.077 1.63993 23.92C0.3266 20.6 0.456602 17.6567 2.02993 15.09C2.72327 13.9633 3.99993 13.1567 5.85993 12.67C9.55327 11.69 13.1266 10.8833 16.5799 10.25C18.8933 9.82333 21.1633 9.06667 23.3899 7.98C28.5099 5.47 34.1199 2.47 39.5399 1.38C46.6799 -0.0700015 53.5499 0.35 60.6799 1.69C65.5999 2.62 70.3399 4.83 74.9699 6.61C76.9899 7.39 79.2199 7.6 81.3699 7.87C81.9583 7.94435 82.5002 8.22875 82.8968 8.67123C83.2934 9.11371 83.5181 9.68474 83.5299 10.28C83.5499 11.89 83.2099 13.55 83.9799 15.03C85.4933 17.9567 85.0399 20.5967 82.6199 22.95C82.3783 23.1782 82.0724 23.3311 81.7399 23.39L76.0499 24.3C75.9881 24.3099 75.925 24.3074 75.8641 24.2925C75.8033 24.2777 75.7461 24.2509 75.6958 24.2136C75.6455 24.1763 75.6031 24.1294 75.5712 24.0756C75.5393 24.0217 75.5185 23.962 75.5099 23.9ZM61.6699 6.98C61.0399 5.54 60.3499 4.11 58.6499 3.77C55.9299 3.21667 53.2166 2.93333 50.5099 2.92C50.2699 2.92 50.1266 3.04 50.0799 3.28L48.9999 9.24C48.9533 9.49333 49.0566 9.61333 49.3099 9.6L60.2699 9.22C60.5311 9.20933 60.7859 9.13517 61.0119 9.00402C61.238 8.87287 61.4284 8.68872 61.5665 8.46769C61.7047 8.24666 61.7863 7.99548 61.8044 7.73613C61.8224 7.47678 61.7762 7.21716 61.6699 6.98ZM46.7999 3.06C41.5999 3.15 36.2599 4.45 31.8599 7.45C31.5466 7.65667 31.4333 7.94333 31.5199 8.31L31.8299 9.68C31.9099 10.0133 32.1199 10.1767 32.4599 10.17L45.2899 9.91C45.3778 9.90957 45.4632 9.87872 45.5322 9.82245C45.6011 9.76618 45.6497 9.6878 45.6699 9.6L46.9999 3.3C47.0059 3.2706 47.0053 3.24023 46.9979 3.21114C46.9906 3.18204 46.9768 3.15497 46.9576 3.13192C46.9384 3.10887 46.9143 3.09044 46.887 3.07799C46.8597 3.06554 46.8299 3.05939 46.7999 3.06ZM63.0699 5.36C63.0241 5.3451 62.9748 5.34496 62.9289 5.35959C62.883 5.37422 62.8429 5.4029 62.8142 5.44156C62.7854 5.48023 62.7696 5.52694 62.7688 5.5751C62.7681 5.62326 62.7824 5.67045 62.8099 5.71L65.1799 8.83C65.3333 9.03 65.5333 9.15333 65.7799 9.2C66.4066 9.31333 67.0099 9.28 67.5899 9.1C68.7166 8.75333 68.7999 8.23333 67.8399 7.54C66.9133 6.88 65.3233 6.15333 63.0699 5.36Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.0102 23.97C22.0102 25.7019 21.3222 27.3628 20.0976 28.5874C18.873 29.812 17.2121 30.5 15.4802 30.5C13.7483 30.5 12.0874 29.812 10.8628 28.5874C9.63817 27.3628 8.9502 25.7019 8.9502 23.97C8.9502 23.1125 9.1191 22.2633 9.44726 21.4711C9.77543 20.6788 10.2564 19.959 10.8628 19.3526C11.4692 18.7462 12.189 18.2652 12.9813 17.9371C13.7735 17.6089 14.6227 17.44 15.4802 17.44C16.3377 17.44 17.1869 17.6089 17.9791 17.9371C18.7714 18.2652 19.4912 18.7462 20.0976 19.3526C20.704 19.959 21.185 20.6788 21.5131 21.4711C21.8413 22.2633 22.0102 23.1125 22.0102 23.97Z"
                                    fill="white" />
                                <path
                                    d="M74.52 23.99C74.52 25.7219 73.832 27.3828 72.6074 28.6074C71.3828 29.832 69.7218 30.52 67.99 30.52C66.2581 30.52 64.5972 29.832 63.3726 28.6074C62.1479 27.3828 61.46 25.7219 61.46 23.99C61.46 22.2581 62.1479 20.5972 63.3726 19.3726C64.5972 18.148 66.2581 17.46 67.99 17.46C69.7218 17.46 71.3828 18.148 72.6074 19.3726C73.832 20.5972 74.52 22.2581 74.52 23.99Z"
                                    fill="white" />
                            </svg>

                            <span>Convertibile</span>
                        </div>
                    </a>
                    <a href="#" class="item">
                        <div class="category-box">
                            <svg width="81" height="26" viewBox="0 0 81 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M65.1902 12.27C62.2502 11.8367 59.9569 12.6033 58.3102 14.57C56.7502 16.44 56.2602 19.25 57.4302 21.47C57.4677 21.5427 57.486 21.6237 57.4834 21.7054C57.4808 21.7872 57.4573 21.8669 57.4152 21.937C57.3732 22.0071 57.3139 22.0653 57.243 22.1061C57.1721 22.1469 57.092 22.1689 57.0102 22.17H21.2102C21.1049 22.1711 21.0009 22.1462 20.9074 22.0974C20.814 22.0487 20.7341 21.9776 20.6747 21.8906C20.6154 21.8035 20.5784 21.7031 20.5672 21.5984C20.5559 21.4936 20.5707 21.3877 20.6102 21.29C21.7436 18.49 21.2836 16.03 19.2302 13.91C13.8702 8.38 4.70023 14.56 7.79023 21.3C8.06356 21.8933 7.87689 22.16 7.23023 22.1L1.86023 21.57C1.56967 21.5434 1.29455 21.4248 1.0738 21.2309C0.853054 21.0371 0.697872 20.7779 0.630226 20.49C-0.763107 14.3967 1.76356 10.5833 8.21023 9.05C13.7702 7.73 19.2802 7.14333 24.7402 7.29C25.2851 7.3032 25.8241 7.18303 26.3102 6.94C29.9202 5.14 33.5302 2.92 37.4002 1.87C47.6302 -0.900003 59.6402 0.929997 68.8602 5.7C71.2602 6.94 73.7502 6.49 76.2802 6.77C76.7977 6.82648 77.2869 7.03528 77.6856 7.36996C78.0844 7.70463 78.3748 8.15012 78.5202 8.65C79.6702 12.67 82.7902 16.08 78.8002 20.01C78.5402 20.2633 78.2302 20.41 77.8702 20.45L70.8302 21.33C70.7775 21.3389 70.7235 21.3341 70.6731 21.316C70.6227 21.2979 70.5776 21.2671 70.5418 21.2263C70.506 21.1855 70.4807 21.1362 70.4682 21.0827C70.4557 21.0292 70.4564 20.9732 70.4702 20.92C71.4302 17.1 69.2902 12.87 65.1902 12.27ZM60.8702 5.61C52.4202 1.75 42.7102 1.92 34.2002 5.38C33.5402 5.64666 33.1702 6.11333 33.0902 6.78C33.0846 6.83993 33.091 6.90038 33.1091 6.95742C33.1271 7.01446 33.1564 7.06683 33.1951 7.11114C33.2337 7.15544 33.2808 7.19069 33.3334 7.21461C33.386 7.23854 33.4428 7.25059 33.5002 7.25C42.0469 7.26333 50.8702 7.26 59.9702 7.24C60.6102 7.24 61.0202 6.94 61.2002 6.34C61.3069 6 61.1969 5.75666 60.8702 5.61Z"
                                    fill="white" />
                                <path
                                    d="M20.4702 18.82C20.4702 20.4776 19.8117 22.0673 18.6396 23.2394C17.4675 24.4115 15.8778 25.07 14.2202 25.07C12.5626 25.07 10.9729 24.4115 9.8008 23.2394C8.6287 22.0673 7.97021 20.4776 7.97021 18.82C7.97021 17.1624 8.6287 15.5727 9.8008 14.4006C10.9729 13.2285 12.5626 12.57 14.2202 12.57C15.8778 12.57 17.4675 13.2285 18.6396 14.4006C19.8117 15.5727 20.4702 17.1624 20.4702 18.82Z"
                                    fill="white" />
                                <path
                                    d="M70.0601 18.84C70.0601 20.4976 69.4016 22.0873 68.2295 23.2594C67.0574 24.4315 65.4677 25.09 63.8101 25.09C62.1525 25.09 60.5627 24.4315 59.3906 23.2594C58.2185 22.0873 57.5601 20.4976 57.5601 18.84C57.5601 17.1824 58.2185 15.5927 59.3906 14.4206C60.5627 13.2485 62.1525 12.59 63.8101 12.59C65.4677 12.59 67.0574 13.2485 68.2295 14.4206C69.4016 15.5927 70.0601 17.1824 70.0601 18.84Z"
                                    fill="white" />
                            </svg>

                            <span>Coupe</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="news">
            <div class="news-container container">
                <div class="news-title">
                    <h1>Descoperiți Anunțurile Noastre Fierbinți</h1>
                    <img src="/assets/images/home/news-img/waves.svg" loading="lazy" alt="Nobil Auto">
                </div>

                <div class="news-slider">
                    <div class="owl-news-cards owl-carousel owl-news">
                        <div class="new-card" data-aos="fade-up" data-aos-delay="0">
                            <a href="#">
                                <div class="new-img-box">
                                    <div class="img-gradient"></div>
                                    <img src="/assets/images/home/news-img/news-car.jpg" loading="lazy" alt="car">
                                    <div class="new-views">
                                        <div class="views">
                                            <i class="fa-regular fa-eye"></i>
                                            <span>5664</span>
                                        </div>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="new-detail">
                                    <h3>Volvo XC90 - 2023</h3>
                                    <div class="car-details">
                                        <div class="car-detail">
                                            <span>€999</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-road"></i>
                                            <span>15462</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gas-pump"></i>
                                            <span>Diesel</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gear"></i>
                                            <span>Automată</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="new-card" data-aos="fade-up" data-aos-delay="300">
                            <a href="#">
                                <div class="new-img-box">
                                    <div class="img-gradient"></div>
                                    <img src="/assets/images/home/news-img/news-car.jpg" loading="lazy" alt="car">
                                    <div class="new-views">
                                        <div class="views">
                                            <i class="fa-regular fa-eye"></i>
                                            <span>5664</span>
                                        </div>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="new-detail">
                                    <h3>Volvo XC90 - 2023</h3>
                                    <div class="car-details">
                                        <div class="car-detail">
                                            <span>€999</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-road"></i>
                                            <span>15462</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gas-pump"></i>
                                            <span>Diesel</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gear"></i>
                                            <span>Automată</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="new-card" data-aos="fade-up" data-aos-delay="600">
                            <a href="#">
                                <div class="new-img-box">
                                    <div class="img-gradient"></div>
                                    <img src="/assets/images/home/news-img/news-car.jpg" loading="lazy" alt="car">
                                    <div class="new-views">
                                        <div class="views">
                                            <i class="fa-regular fa-eye"></i>
                                            <span>5664</span>
                                        </div>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                </div>
                                <div class="new-detail">
                                    <h3>Volvo XC90 - 2023</h3>
                                    <div class="car-details">
                                        <div class="car-detail">
                                            <span>€999</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-road"></i>
                                            <span>15462</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gas-pump"></i>
                                            <span>Diesel</span>
                                        </div>
                                        <div class="car-detail">
                                            <i class="fa-solid fa-gear"></i>
                                            <span>Automată</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits">
            <div class="benefits-container container">
                <h1>Cum-ar Fi Să Ai Propria Mașină Începând De Astăzi?</h1>

                <div class="benefits-box">
                    <div class="benefits-content">
                        <div class="benefit-box" data-aos="fade-up" data-aos-delay="0">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/surcxhka.json" trigger="hover"
                                    state="hover-jump-roll" colors="primary:#121331,secondary:#f07900"
                                    style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Randez-Vous</h3>
                                <p>Stabilim o întâlnire la Parcarea NobilAuto</p>
                            </div>
                        </div>
                        <div class="benefit-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/wzrwaorf.json" trigger="hover"
                                    colors="primary:#121331,secondary:#f07900" style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Personalizare</h3>
                                <p>Alegem împreună mașina dorită</p>
                            </div>
                        </div>
                        <div class="benefit-box" data-aos="fade-up" data-aos-delay="600">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/ghhwiltn.json" trigger="hover"
                                    colors="primary:#121331,secondary:#f07900" style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Contacte</h3>
                                <p>Formalizarea angajamentului nostru Auto!</p>
                            </div>
                        </div>
                        <div class="benefit-box" data-aos="fade-up" data-aos-delay="900">
                            <div class="benefit-icon">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon src="https://cdn.lordicon.com/gqjpawbc.json" trigger="hover"
                                    colors="primary:#121331,secondary:#f07900" style="width:90px;height:90px">
                                </lord-icon>
                            </div>
                            <div class="benefit-text">
                                <h3>Noul Început</h3>
                                <p>Pornește la drum cu volanul unei mașini noi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="benefit-img">
                        <img src="/assets/images/home/benefit.jpg" loading="lazy" alt="benefit">
                    </div>
                </div>
            </div>
        </section>

        <section class="achivements">
            <div class="achivements-container container">
                <div class="achivement" data-aos="fade-in" data-aos-delay="0">
                    <span>450</span>
                    <p>Mașini vândute</p>
                </div>
                <div class="achivement" data-aos="fade-in" data-aos-delay="300">
                    <span>20</span>
                    <p>Diverse modele</p>
                </div>
                <div class="achivement" data-aos="fade-in" data-aos-delay="600">
                    <span>8350</span>
                    <p>Vizitatori Zilnic</p>
                </div>
            </div>
        </section>
        <div class="parallax-box">
            <div class="parallax-image"></div>
            <div class="container">
                <div class="parallax-text choose-us">
                    <h1>Suntem alături de tine cu oferte generoase pentru viitorul tău automobil</h1>
                    <p>Descoperiți plăcerea de a vă achiziționa automobilul dorit cu cele mai atractive condiții de
                        finanțare,
                        oferite de Parcul Auto NobilAuto</p>
                </div>
            </div>
        </div>
    </div>
@endsection
