<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
?>

<section data-code="detail-blog" data-margin="true">
    <div class="container mx-auto">
        <div class="container-white-blog-b">
            <div class="header-detail-green">
                <h1>Вкуснейший кофе КВ900</h1>
            </div>
            <div class="detail-blog-info detail-blog-flex">
                <a href="" class="detail-blog-info-author-user detail-blog-flex">
                    <img src="../assets/images/temp/aboutus/anna_about_us.png" alt="">
                    <span>Аширбеков Ратмир</span>
                </a>
                <div class="detail-blog-info-count-see detail-blog-flex">
                    <svg viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.22218 1.23116C6.07937 1.02512 6.5343 1.26905 6.67078 2.01268C6.75219 2.45081 6.78811 2.91025 7.3436 2.9813C7.99966 3.06655 8.68924 3.10682 9.12741 2.48397C9.35487 2.15715 9.44825 1.74033 9.63741 1.38273C9.75324 1.2184 9.88915 1.06886 10.0421 0.9375C10.157 1.08433 10.3605 1.22879 10.3653 1.38036C10.3962 1.81327 10.3615 2.2483 10.2623 2.67106C10.1642 3.02393 10.2025 3.16602 10.564 3.25601C11.414 3.46679 11.505 3.43837 11.9264 2.67816C12.0797 2.40344 12.2042 2.11215 12.379 1.85401C12.422 1.79357 12.478 1.74331 12.543 1.70686C12.608 1.67042 12.6804 1.64868 12.7549 1.64323C12.8746 1.66218 13.0662 1.84217 13.059 1.94401C13.0634 2.43249 13.0006 2.9193 12.8722 3.39101C12.7501 3.75572 12.6878 3.9357 13.1117 4.10148C13.5698 4.28564 14.0112 4.50828 14.431 4.76696C14.5841 4.87744 14.7738 4.92663 14.962 4.90467C15.1503 4.88271 15.3232 4.79123 15.4462 4.64855C15.6712 4.43067 15.9107 4.22464 16.1477 4.01623C16.4638 3.73914 16.7846 3.61363 17.1055 4.01623C17.4263 4.41883 17.4527 4.91853 17.06 5.20036C16.7621 5.39835 16.4536 5.58018 16.1357 5.74505C16.696 6.62367 17.2707 7.45256 17.7711 8.32408C18.1638 9.01087 18.0465 9.25717 17.3281 9.61478C14.4286 11.0499 11.3997 11.7059 8.13135 11.2726C6.63008 11.076 5.12402 10.9434 3.80711 10.1595C3.08218 9.69203 2.39457 9.17027 1.75033 8.59879C1.39597 8.30513 1.33132 7.94042 1.58752 7.49756C1.6281 7.38069 1.64206 7.2564 1.6284 7.13357C1.61474 7.01075 1.5738 6.89243 1.50851 6.78708C1.26907 6.39158 0.91949 6.05766 0.653714 5.67164C0.433432 5.35192 0.605829 5.16246 0.948225 5.22167C1.25317 5.29408 1.54592 5.40974 1.81738 5.56506C2.09752 5.70716 2.26513 6.18318 2.69851 5.78294C3.17739 5.33298 3.31147 4.85932 3.03372 4.38093C2.83739 4.04464 2.64344 3.70362 2.47344 3.35311C2.42076 3.24891 2.39443 3.02866 2.44471 2.99551C2.50451 2.95295 2.57342 2.92462 2.64609 2.91271C2.71877 2.9008 2.79325 2.90563 2.86373 2.92683C3.23484 3.13282 3.57295 3.39222 3.86697 3.69651C4.13035 4.00675 4.30992 4.10859 4.69781 3.89782C5.61725 3.39338 5.73698 3.16365 5.45923 2.16188C5.38021 1.85875 5.30359 1.54377 5.22218 1.23116ZM12.2377 9.9416C12.8914 9.76871 13.3942 9.65977 13.8802 9.50584C14.5597 9.30402 15.2278 9.06686 15.8819 8.79536C16.0615 8.71484 16.2842 8.33592 16.2291 8.20093C15.7119 6.94339 14.7638 6.09082 13.387 5.44192C14.1724 7.2631 13.035 8.49696 12.2377 9.9416ZM2.89964 8.44012C4.27051 9.47987 5.96157 10.021 7.68839 9.97238C5.87585 9.13639 5.58373 7.41704 5.14317 5.63611L2.89964 8.44012Z"/>
                    </svg>
                    <span>95 просмотров</span>
                </div>
                <div class="detail-blog-info-date">
                    <span>12.12.2024 г.</span>
                </div>
            </div>
        </div>
        <div class="container-white-blog-t">
            <img src="../assets/images/banner.png" alt="" class="detail-blog-info-bg">
            <div class="detail-blog-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis nemo sequi. Amet
                    asperiores consectetur, culpa fugiat fugit id illum iure necessitatibus nisi numquam quasi
                    repellat saepe tempore ut voluptas!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis nemo sequi. Amet
                    asperiores consectetur, culpa fugiat fugit id illum iure necessitatibus nisi numquam quasi
                    repellat saepe tempore ut voluptas!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis nemo sequi. Amet
                    asperiores consectetur, culpa fugiat fugit id illum iure necessitatibus nisi numquam quasi
                    repellat saepe tempore ut voluptas!</p>
                <img src="../assets/images/banner.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis nemo sequi. Amet
                    asperiores consectetur, culpa fugiat fugit id illum iure necessitatibus nisi numquam quasi
                    repellat saepe tempore ut voluptas!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis nemo sequi. Amet
                    asperiores consectetur, culpa fugiat fugit id illum iure necessitatibus nisi numquam quasi
                    repellat saepe tempore ut voluptas!</p>
            </div>
            <div class="detail-blog-additional-info">
                <div class="detail-blog--tabs detail-blog-flex">
                    <div class="detail-blog-tab active-tab" data-id="video">Видео</div>
                    <div class="detail-blog-tab" data-id="files">Дополнительные файлы</div>
                    <div class="detail-blog-tab" data-id="links">Полезные ссылки</div>
                </div>
                <div class="detail-blog--containers">
                    <div class="detail-blog-container active-tab" data-id="video">
                        <div class="detail-blog-container-video-item-youtube">
                            <div class="detail-blog-container-video-item-youtube-iframe">
                                <iframe src="https://www.youtube.com/embed/0GasDaWGtkI?si=9FGLHVxKTtrbtDEn"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="detail-blog-container-video-item-youtube-iframe">
                                <iframe src="https://www.youtube.com/embed/b9Q99iJHrUU?si=b8tB8q_w3xxtdWYw"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="detail-blog-container-video-item-youtube-iframe">
                                <iframe src="https://www.youtube.com/embed/bZWh_pkifJM?si=Ihz8hy3YGXrHYAfb"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="detail-blog-container-video-item-youtube-iframe">
                                <iframe src="https://www.youtube.com/embed/GXPekeQpwpo?si=RkLkbqEUDDihdHMa"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="detail-blog-container-video-item-youtube-iframe">
                                <iframe src="https://www.youtube.com/embed/8MALIXXCaZk?si=yy22umyDv9t7Z5GM"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="detail-blog-container-video-item-youtube-iframe">
                                <iframe src="https://www.youtube.com/embed/RCH52plPX1I?si=u5ySNwrlCUGEvXI0"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="detail-blog-container-video-item-youtube-iframe">
                                <iframe src="https://www.youtube.com/embed/vflwSLZAjRU?si=5c7PctdnUUfPgLUs"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="detail-blog-container" data-id="files">
                        <!-- icons https://icons8.com/icon/set/files/color -->
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/7zip.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/csv.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/doc.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/document.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/jpg.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/pdf.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/ppt.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/rar.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/txt.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/word-file.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/xls.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>
                        <div class="detail-blog-container-files-list">
                            <div class="detail-blog-container-files-item">
                                <img class="detail-blog-container-files-item-image"
                                     src="../assets/images/files_format/zip.png" alt="">
                                <div class="detail-blog-container-files-item-name">Секретный файл</div>
                                <div class="detail-blog-container-files-item-size">23 mb</div>
                                <a href="" class="detail-blog-container-files-item-link-to-download">скачать</a>
                            </div>
                        </div>

                    </div>
                    <div class="detail-blog-container" data-id="links">
                        <a href="///">Статья о том как правильно подключить кофемашину</a>
                        <a href="///">Статья о том как правильно подключить кофемашину</a>
                        <a href="///">Статья о том как правильно подключить кофемашину</a>
                        <a href="///">Статья о том как правильно подключить кофемашину</a>
                        <a href="///">Статья о том как правильно подключить кофемашину</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
