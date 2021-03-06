<?php ?>

<?php get_template_part('templates/'); ?>


.home {
  .the-main {
    .container-fluid {
      .page-title {
        @include dptl(block,relative,0,0);
        @include whmp(100%,auto,8px 0,5px 10%!important);

        font-size: 20px!important;
      }
      .browse-drop {}
      .gallery-covers {
        @media (max-width: ($xs2-min-width - 1)) {display: none!important;}
        margin-top: 5px!important;
        padding: 0 10px!important;
        .gallery-slider {
          .slick-list {
            .slick-track {
            }
          }
          .gallery-item {
            .gallery-link {
              .gallery-title {
              }
              .gallery-img {
              }
            }
          }
          .gallery-item:hover {
            .gallery-link {
              .gallery-title {}
              .gallery-img {}
            }
          }
        }
      }
    }
  }
  @media only screen and (min-width:$xs2-min-width) {}
  @media only screen and (min-width: $xs3-min-width) {}
  @media only screen and (min-width:$sm-min-width) {
    .the-main {
      .container-fluid {
        .page-title {
          font-size: 30px!important;
        }
        .gallery-covers {}
      }
    }
  }
  @media only screen and (min-width:$md-min-width) {}
  @media only screen and (min-width: $md-min-width) {}
  @media only screen and (min-width:$lg-min-width) {}
}
