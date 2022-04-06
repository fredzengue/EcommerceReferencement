<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <title>Africa market || @yield('page_title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <style type="text/css">
        @font-face {
            font-family: 'Architects Daughter';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/architectsdaughter/v17/KtkxAKiDZI_td1Lkx62xHZHDtgO_Y-bvTYlg5g.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHrv4kjgoGqM7E_Cfs7wHo.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHsv4kjgoGqM7E_CfPI42ouvT8.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHsv4kjgoGqM7E_CfPk5GouvT8.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHsv4kjgoGqM7E_CfOA5WouvT8.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHqv4kjgoGqM7E3p-ks51op.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHpv4kjgoGqM7E_DMs8.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHqv4kjgoGqM7E3_-gs51op.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHqv4kjgoGqM7E30-8s51op.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Barlow';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/barlow/v11/7cHqv4kjgoGqM7E3t-4s51op.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9A4kDNxMZdWfMOD5VvkrCqUTDfdA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9f4kDNxMZdWfMOD5VvkrAGQCf4VFw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9f4kDNxMZdWfMOD5VvkrBiQyf4VFw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9C4kDNxMZdWfMOD5VvkrjJYTc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9f4kDNxMZdWfMOD5VvkrA6Qif4VFw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9f4kDNxMZdWfMOD5VvkrAWRSf4VFw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9f4kDNxMZdWfMOD5VvkrByRCf4VFw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9f4kDNxMZdWfMOD5VvkrBuRyf4VFw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9f4kDNxMZdWfMOD5VvkrBKRif4VFw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9C4kDNxMZdWfMOD5Vn9LjJYTc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9B4kDNxMZdWfMOD5VnWKneRhf_.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9B4kDNxMZdWfMOD5VnPKreRhf_.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9E4kDNxMZdWfMOD5Vvl4jO.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9B4kDNxMZdWfMOD5VnZKveRhf_.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9B4kDNxMZdWfMOD5VnSKzeRhf_.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9B4kDNxMZdWfMOD5VnLK3eRhf_.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9B4kDNxMZdWfMOD5VnMK7eRhf_.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Fira Sans';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/firasans/v15/va9B4kDNxMZdWfMOD5VnFK_eRhf_.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lexend/v14/wlptgwvFAVdoq2_F94zlCfv0bz1WCzsWzLdnfw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lexend/v14/wlptgwvFAVdoq2_F94zlCfv0bz1WCwkWzLdnfw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lexend/v14/wlptgwvFAVdoq2_F94zlCfv0bz1WC-URzLdnfw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lexend/v14/wlptgwvFAVdoq2_F94zlCfv0bz1WC9wRzLdnfw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lora';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lora/v23/0QI6MX1D_JOuGQbT0gvTJPa787weuxJBkqg.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lora';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lora/v23/0QI6MX1D_JOuGQbT0gvTJPa787wsuxJBkqg.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lora';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lora/v23/0QI6MX1D_JOuGQbT0gvTJPa787zAvBJBkqg.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Lora';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/lora/v23/0QI6MX1D_JOuGQbT0gvTJPa787z5vBJBkqg.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Playfair Display';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/playfairdisplay/v28/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_qiTXtHA_A.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Playfair Display';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/playfairdisplay/v28/nuFRD-vYSZviVYUb_rj3ij__anPXDTnCjmHKM4nYO7KN_k-UXtHA_A.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/playfairdisplay/v28/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKdFvXDXbtY.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/playfairdisplay/v28/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKeiunDXbtY.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/playfairdisplay/v28/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfFunDXbtY.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/playfairdisplay/v28/nuFvD-vYSZviVYUb_rj3ij__anPXJzDwcbmjWBN2PKfsunDXbtY.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiAyp8kv8JHgFVrJJLmE0tCMPc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmv1pVF9eL.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm21lVF9eL.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrJJLucHtF.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmg1hVF9eL.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmr19VF9eL.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLmy15VF9eL.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm111VF9eL.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiDyp8kv8JHgFVrJJLm81xVF9eL.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiGyp8kv8JHgFVrLPTucHtF.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLFj_Z1xlEA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDz8Z1xlEA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiEyp8kv8JHgFVrJJfedw.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLGT9Z1xlEA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLEj6Z1xlEA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLCz7Z1xlEA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLDD4Z1xlEA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/poppins/v19/pxiByp8kv8JHgFVrLBT5Z1xlEA.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOiCnqEu92Fr1Mu51QrEzAdKg.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TjASc6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1Mu51xIIzc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51S7ACc6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TzBic6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: italic;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOjCnqEu92Fr1Mu51TLBCc6CsE.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc9.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmYUtfBBc9.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojIWmb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDISmb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjo0oSmb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojISmb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjovoSmb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoUoOmb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4Omb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDIOmb2Rm.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Roboto Slab';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/robotoslab/v22/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoJYOmb2Rm.ttf) format('truetype');
        }

    </style>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Organio &raquo; Feed"
        href="https://demo.casethemes.net/organio/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Organio &raquo; Comments Feed"
        href="https://demo.casethemes.net/organio/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.casethemes.net\/organio\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.2"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>
    <link rel='stylesheet' id='sbi_styles-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.0.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://demo.casethemes.net/organio/wp-includes/css/dist/block-library/style.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-vendors-style-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.min.css?ver=6.7.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.min.css?ver=6.7.3'
        type='text/css' media='all' />
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

    </style>
    <style id='extendify-utilities-inline-css' type='text/css'>
        .ext-absolute {
            position: absolute !important
        }

        .ext-relative {
            position: relative !important
        }

        .ext-top-base {
            top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-top-lg {
            top: var(--extendify--spacing--large) !important
        }

        .ext--top-base {
            top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--top-lg {
            top: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-right-base {
            right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-right-lg {
            right: var(--extendify--spacing--large) !important
        }

        .ext--right-base {
            right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--right-lg {
            right: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-bottom-base {
            bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-bottom-lg {
            bottom: var(--extendify--spacing--large) !important
        }

        .ext--bottom-base {
            bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--bottom-lg {
            bottom: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-left-base {
            left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-left-lg {
            left: var(--extendify--spacing--large) !important
        }

        .ext--left-base {
            left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--left-lg {
            left: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-order-1 {
            order: 1 !important
        }

        .ext-order-2 {
            order: 2 !important
        }

        .ext-col-auto {
            grid-column: auto !important
        }

        .ext-col-span-1 {
            grid-column: span 1/span 1 !important
        }

        .ext-col-span-2 {
            grid-column: span 2/span 2 !important
        }

        .ext-col-span-3 {
            grid-column: span 3/span 3 !important
        }

        .ext-col-span-4 {
            grid-column: span 4/span 4 !important
        }

        .ext-col-span-5 {
            grid-column: span 5/span 5 !important
        }

        .ext-col-span-6 {
            grid-column: span 6/span 6 !important
        }

        .ext-col-span-7 {
            grid-column: span 7/span 7 !important
        }

        .ext-col-span-8 {
            grid-column: span 8/span 8 !important
        }

        .ext-col-span-9 {
            grid-column: span 9/span 9 !important
        }

        .ext-col-span-10 {
            grid-column: span 10/span 10 !important
        }

        .ext-col-span-11 {
            grid-column: span 11/span 11 !important
        }

        .ext-col-span-12 {
            grid-column: span 12/span 12 !important
        }

        .ext-col-span-full {
            grid-column: 1/-1 !important
        }

        .ext-col-start-1 {
            grid-column-start: 1 !important
        }

        .ext-col-start-2 {
            grid-column-start: 2 !important
        }

        .ext-col-start-3 {
            grid-column-start: 3 !important
        }

        .ext-col-start-4 {
            grid-column-start: 4 !important
        }

        .ext-col-start-5 {
            grid-column-start: 5 !important
        }

        .ext-col-start-6 {
            grid-column-start: 6 !important
        }

        .ext-col-start-7 {
            grid-column-start: 7 !important
        }

        .ext-col-start-8 {
            grid-column-start: 8 !important
        }

        .ext-col-start-9 {
            grid-column-start: 9 !important
        }

        .ext-col-start-10 {
            grid-column-start: 10 !important
        }

        .ext-col-start-11 {
            grid-column-start: 11 !important
        }

        .ext-col-start-12 {
            grid-column-start: 12 !important
        }

        .ext-col-start-13 {
            grid-column-start: 13 !important
        }

        .ext-col-start-auto {
            grid-column-start: auto !important
        }

        .ext-col-end-1 {
            grid-column-end: 1 !important
        }

        .ext-col-end-2 {
            grid-column-end: 2 !important
        }

        .ext-col-end-3 {
            grid-column-end: 3 !important
        }

        .ext-col-end-4 {
            grid-column-end: 4 !important
        }

        .ext-col-end-5 {
            grid-column-end: 5 !important
        }

        .ext-col-end-6 {
            grid-column-end: 6 !important
        }

        .ext-col-end-7 {
            grid-column-end: 7 !important
        }

        .ext-col-end-8 {
            grid-column-end: 8 !important
        }

        .ext-col-end-9 {
            grid-column-end: 9 !important
        }

        .ext-col-end-10 {
            grid-column-end: 10 !important
        }

        .ext-col-end-11 {
            grid-column-end: 11 !important
        }

        .ext-col-end-12 {
            grid-column-end: 12 !important
        }

        .ext-col-end-13 {
            grid-column-end: 13 !important
        }

        .ext-col-end-auto {
            grid-column-end: auto !important
        }

        .ext-row-auto {
            grid-row: auto !important
        }

        .ext-row-span-1 {
            grid-row: span 1/span 1 !important
        }

        .ext-row-span-2 {
            grid-row: span 2/span 2 !important
        }

        .ext-row-span-3 {
            grid-row: span 3/span 3 !important
        }

        .ext-row-span-4 {
            grid-row: span 4/span 4 !important
        }

        .ext-row-span-5 {
            grid-row: span 5/span 5 !important
        }

        .ext-row-span-6 {
            grid-row: span 6/span 6 !important
        }

        .ext-row-span-full {
            grid-row: 1/-1 !important
        }

        .ext-row-start-1 {
            grid-row-start: 1 !important
        }

        .ext-row-start-2 {
            grid-row-start: 2 !important
        }

        .ext-row-start-3 {
            grid-row-start: 3 !important
        }

        .ext-row-start-4 {
            grid-row-start: 4 !important
        }

        .ext-row-start-5 {
            grid-row-start: 5 !important
        }

        .ext-row-start-6 {
            grid-row-start: 6 !important
        }

        .ext-row-start-7 {
            grid-row-start: 7 !important
        }

        .ext-row-start-auto {
            grid-row-start: auto !important
        }

        .ext-row-end-1 {
            grid-row-end: 1 !important
        }

        .ext-row-end-2 {
            grid-row-end: 2 !important
        }

        .ext-row-end-3 {
            grid-row-end: 3 !important
        }

        .ext-row-end-4 {
            grid-row-end: 4 !important
        }

        .ext-row-end-5 {
            grid-row-end: 5 !important
        }

        .ext-row-end-6 {
            grid-row-end: 6 !important
        }

        .ext-row-end-7 {
            grid-row-end: 7 !important
        }

        .ext-row-end-auto {
            grid-row-end: auto !important
        }

        .ext-m-0:not([style*=margin]) {
            margin: 0 !important
        }

        .ext-m-auto:not([style*=margin]) {
            margin: auto !important
        }

        .ext-m-base:not([style*=margin]) {
            margin: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-m-lg:not([style*=margin]) {
            margin: var(--extendify--spacing--large) !important
        }

        .ext--m-base:not([style*=margin]) {
            margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--m-lg:not([style*=margin]) {
            margin: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mx-0:not([style*=margin]) {
            margin-left: 0 !important;
            margin-right: 0 !important
        }

        .ext-mx-auto:not([style*=margin]) {
            margin-left: auto !important;
            margin-right: auto !important
        }

        .ext-mx-base:not([style*=margin]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            margin-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mx-lg:not([style*=margin]) {
            margin-left: var(--extendify--spacing--large) !important;
            margin-right: var(--extendify--spacing--large) !important
        }

        .ext--mx-base:not([style*=margin]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
            margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mx-lg:not([style*=margin]) {
            margin-left: calc(var(--extendify--spacing--large)*-1) !important;
            margin-right: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-my-0:not([style*=margin]) {
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        .ext-my-auto:not([style*=margin]) {
            margin-bottom: auto !important;
            margin-top: auto !important
        }

        .ext-my-base:not([style*=margin]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            margin-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-my-lg:not([style*=margin]) {
            margin-bottom: var(--extendify--spacing--large) !important;
            margin-top: var(--extendify--spacing--large) !important
        }

        .ext--my-base:not([style*=margin]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
            margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--my-lg:not([style*=margin]) {
            margin-bottom: calc(var(--extendify--spacing--large)*-1) !important;
            margin-top: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mt-0:not([style*=margin]) {
            margin-top: 0 !important
        }

        .ext-mt-auto:not([style*=margin]) {
            margin-top: auto !important
        }

        .ext-mt-base:not([style*=margin]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mt-lg:not([style*=margin]) {
            margin-top: var(--extendify--spacing--large) !important
        }

        .ext--mt-base:not([style*=margin]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mt-lg:not([style*=margin]) {
            margin-top: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mr-0:not([style*=margin]) {
            margin-right: 0 !important
        }

        .ext-mr-auto:not([style*=margin]) {
            margin-right: auto !important
        }

        .ext-mr-base:not([style*=margin]) {
            margin-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mr-lg:not([style*=margin]) {
            margin-right: var(--extendify--spacing--large) !important
        }

        .ext--mr-base:not([style*=margin]) {
            margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mr-lg:not([style*=margin]) {
            margin-right: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-mb-0:not([style*=margin]) {
            margin-bottom: 0 !important
        }

        .ext-mb-auto:not([style*=margin]) {
            margin-bottom: auto !important
        }

        .ext-mb-base:not([style*=margin]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-mb-lg:not([style*=margin]) {
            margin-bottom: var(--extendify--spacing--large) !important
        }

        .ext--mb-base:not([style*=margin]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--mb-lg:not([style*=margin]) {
            margin-bottom: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-ml-0:not([style*=margin]) {
            margin-left: 0 !important
        }

        .ext-ml-auto:not([style*=margin]) {
            margin-left: auto !important
        }

        .ext-ml-base:not([style*=margin]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-ml-lg:not([style*=margin]) {
            margin-left: var(--extendify--spacing--large) !important
        }

        .ext--ml-base:not([style*=margin]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
        }

        .ext--ml-lg:not([style*=margin]) {
            margin-left: calc(var(--extendify--spacing--large)*-1) !important
        }

        .ext-block {
            display: block !important
        }

        .ext-inline-block {
            display: inline-block !important
        }

        .ext-inline {
            display: inline !important
        }

        .ext-flex {
            display: flex !important
        }

        .ext-inline-flex {
            display: inline-flex !important
        }

        .ext-grid {
            display: grid !important
        }

        .ext-inline-grid {
            display: inline-grid !important
        }

        .ext-hidden {
            display: none !important
        }

        .ext-w-auto {
            width: auto !important
        }

        .ext-w-full {
            width: 100% !important
        }

        .ext-max-w-full {
            max-width: 100% !important
        }

        .ext-flex-1 {
            flex: 1 1 0% !important
        }

        .ext-flex-auto {
            flex: 1 1 auto !important
        }

        .ext-flex-initial {
            flex: 0 1 auto !important
        }

        .ext-flex-none {
            flex: none !important
        }

        .ext-flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .ext-flex-shrink {
            flex-shrink: 1 !important
        }

        .ext-flex-grow-0 {
            flex-grow: 0 !important
        }

        .ext-flex-grow {
            flex-grow: 1 !important
        }

        .ext-list-none {
            list-style-type: none !important
        }

        .ext-grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-6 {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-7 {
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-8 {
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-9 {
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-10 {
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-11 {
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-12 {
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important
        }

        .ext-grid-cols-none {
            grid-template-columns: none !important
        }

        .ext-grid-rows-1 {
            grid-template-rows: repeat(1, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-2 {
            grid-template-rows: repeat(2, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-3 {
            grid-template-rows: repeat(3, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-4 {
            grid-template-rows: repeat(4, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-5 {
            grid-template-rows: repeat(5, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-6 {
            grid-template-rows: repeat(6, minmax(0, 1fr)) !important
        }

        .ext-grid-rows-none {
            grid-template-rows: none !important
        }

        .ext-flex-row {
            flex-direction: row !important
        }

        .ext-flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .ext-flex-col {
            flex-direction: column !important
        }

        .ext-flex-col-reverse {
            flex-direction: column-reverse !important
        }

        .ext-flex-wrap {
            flex-wrap: wrap !important
        }

        .ext-flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .ext-flex-nowrap {
            flex-wrap: nowrap !important
        }

        .ext-items-start {
            align-items: flex-start !important
        }

        .ext-items-end {
            align-items: flex-end !important
        }

        .ext-items-center {
            align-items: center !important
        }

        .ext-items-baseline {
            align-items: baseline !important
        }

        .ext-items-stretch {
            align-items: stretch !important
        }

        .ext-justify-start {
            justify-content: flex-start !important
        }

        .ext-justify-end {
            justify-content: flex-end !important
        }

        .ext-justify-center {
            justify-content: center !important
        }

        .ext-justify-between {
            justify-content: space-between !important
        }

        .ext-justify-around {
            justify-content: space-around !important
        }

        .ext-justify-evenly {
            justify-content: space-evenly !important
        }

        .ext-justify-items-start {
            justify-items: start !important
        }

        .ext-justify-items-end {
            justify-items: end !important
        }

        .ext-justify-items-center {
            justify-items: center !important
        }

        .ext-justify-items-stretch {
            justify-items: stretch !important
        }

        .ext-gap-0 {
            gap: 0 !important
        }

        .ext-gap-base {
            gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-lg {
            gap: var(--extendify--spacing--large) !important
        }

        .ext-gap-x-0 {
            -moz-column-gap: 0 !important;
            column-gap: 0 !important
        }

        .ext-gap-x-base {
            -moz-column-gap: var(--wp--style--block-gap, 1.75rem) !important;
            column-gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-x-lg {
            -moz-column-gap: var(--extendify--spacing--large) !important;
            column-gap: var(--extendify--spacing--large) !important
        }

        .ext-gap-y-0 {
            row-gap: 0 !important
        }

        .ext-gap-y-base {
            row-gap: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-gap-y-lg {
            row-gap: var(--extendify--spacing--large) !important
        }

        .ext-justify-self-auto {
            justify-self: auto !important
        }

        .ext-justify-self-start {
            justify-self: start !important
        }

        .ext-justify-self-end {
            justify-self: end !important
        }

        .ext-justify-self-center {
            justify-self: center !important
        }

        .ext-justify-self-stretch {
            justify-self: stretch !important
        }

        .ext-rounded-none {
            border-radius: 0 !important
        }

        .ext-rounded-full {
            border-radius: 9999px !important
        }

        .ext-rounded-t-none {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important
        }

        .ext-rounded-t-full {
            border-top-left-radius: 9999px !important;
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-r-none {
            border-bottom-right-radius: 0 !important;
            border-top-right-radius: 0 !important
        }

        .ext-rounded-r-full {
            border-bottom-right-radius: 9999px !important;
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-b-none {
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 0 !important
        }

        .ext-rounded-b-full {
            border-bottom-left-radius: 9999px !important;
            border-bottom-right-radius: 9999px !important
        }

        .ext-rounded-l-none {
            border-bottom-left-radius: 0 !important;
            border-top-left-radius: 0 !important
        }

        .ext-rounded-l-full {
            border-bottom-left-radius: 9999px !important;
            border-top-left-radius: 9999px !important
        }

        .ext-rounded-tl-none {
            border-top-left-radius: 0 !important
        }

        .ext-rounded-tl-full {
            border-top-left-radius: 9999px !important
        }

        .ext-rounded-tr-none {
            border-top-right-radius: 0 !important
        }

        .ext-rounded-tr-full {
            border-top-right-radius: 9999px !important
        }

        .ext-rounded-br-none {
            border-bottom-right-radius: 0 !important
        }

        .ext-rounded-br-full {
            border-bottom-right-radius: 9999px !important
        }

        .ext-rounded-bl-none {
            border-bottom-left-radius: 0 !important
        }

        .ext-rounded-bl-full {
            border-bottom-left-radius: 9999px !important
        }

        .ext-border-0 {
            border-width: 0 !important
        }

        .ext-border-t-0 {
            border-top-width: 0 !important
        }

        .ext-border-r-0 {
            border-right-width: 0 !important
        }

        .ext-border-b-0 {
            border-bottom-width: 0 !important
        }

        .ext-border-l-0 {
            border-left-width: 0 !important
        }

        .ext-p-0:not([style*=padding]) {
            padding: 0 !important
        }

        .ext-p-base:not([style*=padding]) {
            padding: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-p-lg:not([style*=padding]) {
            padding: var(--extendify--spacing--large) !important
        }

        .ext-px-0:not([style*=padding]) {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .ext-px-base:not([style*=padding]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            padding-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-px-lg:not([style*=padding]) {
            padding-left: var(--extendify--spacing--large) !important;
            padding-right: var(--extendify--spacing--large) !important
        }

        .ext-py-0:not([style*=padding]) {
            padding-bottom: 0 !important;
            padding-top: 0 !important
        }

        .ext-py-base:not([style*=padding]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            padding-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-py-lg:not([style*=padding]) {
            padding-bottom: var(--extendify--spacing--large) !important;
            padding-top: var(--extendify--spacing--large) !important
        }

        .ext-pt-0:not([style*=padding]) {
            padding-top: 0 !important
        }

        .ext-pt-base:not([style*=padding]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pt-lg:not([style*=padding]) {
            padding-top: var(--extendify--spacing--large) !important
        }

        .ext-pr-0:not([style*=padding]) {
            padding-right: 0 !important
        }

        .ext-pr-base:not([style*=padding]) {
            padding-right: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pr-lg:not([style*=padding]) {
            padding-right: var(--extendify--spacing--large) !important
        }

        .ext-pb-0:not([style*=padding]) {
            padding-bottom: 0 !important
        }

        .ext-pb-base:not([style*=padding]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pb-lg:not([style*=padding]) {
            padding-bottom: var(--extendify--spacing--large) !important
        }

        .ext-pl-0:not([style*=padding]) {
            padding-left: 0 !important
        }

        .ext-pl-base:not([style*=padding]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important
        }

        .ext-pl-lg:not([style*=padding]) {
            padding-left: var(--extendify--spacing--large) !important
        }

        .ext-text-left {
            text-align: left !important
        }

        .ext-text-center {
            text-align: center !important
        }

        .ext-text-right {
            text-align: right !important
        }

        .ext-leading-none {
            line-height: 1 !important
        }

        .ext-leading-tight {
            line-height: 1.25 !important
        }

        .ext-leading-snug {
            line-height: 1.375 !important
        }

        .ext-leading-normal {
            line-height: 1.5 !important
        }

        .ext-leading-relaxed {
            line-height: 1.625 !important
        }

        .ext-leading-loose {
            line-height: 2 !important
        }

        .clip-path--rhombus img {
            -webkit-clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%);
            clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%)
        }

        .clip-path--diamond img {
            -webkit-clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%);
            clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%)
        }

        .clip-path--rhombus-alt img {
            -webkit-clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%);
            clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%)
        }

        .wp-block-columns[class*=fullwidth-cols] {
            margin-bottom: unset
        }

        .wp-block-column.editor\:pointer-events-none {
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        .is-root-container.block-editor-block-list__layout>[data-align=full]:not(:first-of-type)>.wp-block-column.editor\:pointer-events-none,
        .is-root-container.block-editor-block-list__layout>[data-align=wide]>.wp-block-column.editor\:pointer-events-none {
            margin-top: calc(var(--wp--style--block-gap, 28px)*-1) !important
        }

        .ext .wp-block-columns .wp-block-column[style*=padding] {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .ext .wp-block-columns+.wp-block-columns:not([class*=mt-]):not([class*=my-]):not([style*=margin]) {
            margin-top: 0 !important
        }

        [class*=fullwidth-cols] .wp-block-column:first-child,
        [class*=fullwidth-cols] .wp-block-group:first-child {
            margin-top: 0
        }

        [class*=fullwidth-cols] .wp-block-column:last-child,
        [class*=fullwidth-cols] .wp-block-group:last-child {
            margin-bottom: 0
        }

        [class*=fullwidth-cols] .wp-block-column:first-child>*,
        [class*=fullwidth-cols] .wp-block-column>:first-child {
            margin-top: 0
        }

        .ext .is-not-stacked-on-mobile .wp-block-column,
        [class*=fullwidth-cols] .wp-block-column>:last-child {
            margin-bottom: 0
        }

        .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem)
        }

        @media (min-width:782px) {
            .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
                margin-bottom: 0
            }
        }

        .wp-block-columns[class*=fullwidth-cols].is-not-stacked-on-mobile>.wp-block-column {
            margin-bottom: 0 !important
        }

        @media (min-width:600px) and (max-width:781px) {
            .wp-block-columns[class*=fullwidth-cols]:not(.is-not-stacked-on-mobile)>.wp-block-column:nth-child(2n) {
                margin-left: var(--wp--style--block-gap, 2em)
            }
        }

        @media (max-width:781px) {
            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column,
            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*=margin]) {
                margin-left: 0 !important
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (max-width:1079px) {
            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column,
            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*=margin]) {
                margin-left: 0 !important
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }
        }

        .direction-rtl {
            direction: rtl
        }

        .direction-ltr {
            direction: ltr
        }

        .is-style-inline-list {
            padding-left: 0 !important
        }

        .is-style-inline-list li {
            list-style-type: none !important
        }

        @media (min-width:782px) {
            .is-style-inline-list li {
                display: inline !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }
        }

        @media (min-width:782px) {
            .is-style-inline-list li:first-child {
                margin-left: 0 !important
            }
        }

        @media (min-width:782px) {
            .is-style-inline-list li:last-child {
                margin-right: 0 !important
            }
        }

        .bring-to-front {
            position: relative;
            z-index: 10
        }

        .text-stroke {
            -webkit-text-stroke-color: var(--wp--preset--color--background)
        }

        .text-stroke,
        .text-stroke--primary {
            -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width, 2px)
        }

        .text-stroke--primary {
            -webkit-text-stroke-color: var(--wp--preset--color--primary)
        }

        .text-stroke--secondary {
            -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width, 2px);
            -webkit-text-stroke-color: var(--wp--preset--color--secondary)
        }

        .editor\:no-caption .block-editor-rich-text__editable {
            display: none !important
        }

        .editor\:no-inserter .wp-block-column:not(.is-selected)>.block-list-appender,
        .editor\:no-inserter .wp-block-cover__inner-container>.block-list-appender,
        .editor\:no-inserter .wp-block-group__inner-container>.block-list-appender,
        .editor\:no-inserter>.block-list-appender {
            display: none
        }

        .editor\:no-resize .components-resizable-box__handle,
        .editor\:no-resize .components-resizable-box__handle:after,
        .editor\:no-resize .components-resizable-box__side-handle:before {
            display: none;
            pointer-events: none
        }

        .editor\:no-resize .components-resizable-box__container {
            display: block
        }

        .editor\:pointer-events-none {
            pointer-events: none
        }

        .is-style-angled {
            justify-content: flex-end
        }

        .ext .is-style-angled>[class*=_inner-container],
        .is-style-angled {
            align-items: center
        }

        .is-style-angled .wp-block-cover__image-background,
        .is-style-angled .wp-block-cover__video-background {
            -webkit-clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
            clip-path: polygon(0 0, 30% 0, 50% 100%, 0 100%);
            z-index: 1
        }

        @media (min-width:782px) {

            .is-style-angled .wp-block-cover__image-background,
            .is-style-angled .wp-block-cover__video-background {
                -webkit-clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%);
                clip-path: polygon(0 0, 55% 0, 65% 100%, 0 100%)
            }
        }

        .has-foreground-color {
            color: var(--wp--preset--color--foreground, #000) !important
        }

        .has-foreground-background-color {
            background-color: var(--wp--preset--color--foreground, #000) !important
        }

        .has-background-color {
            color: var(--wp--preset--color--background, #fff) !important
        }

        .has-background-background-color {
            background-color: var(--wp--preset--color--background, #fff) !important
        }

        .has-primary-color {
            color: var(--wp--preset--color--primary, #4b5563) !important
        }

        .has-primary-background-color {
            background-color: var(--wp--preset--color--primary, #4b5563) !important
        }

        .has-secondary-color {
            color: var(--wp--preset--color--secondary, #9ca3af) !important
        }

        .has-secondary-background-color {
            background-color: var(--wp--preset--color--secondary, #9ca3af) !important
        }

        .ext.has-text-color h1,
        .ext.has-text-color h2,
        .ext.has-text-color h3,
        .ext.has-text-color h4,
        .ext.has-text-color h5,
        .ext.has-text-color h6,
        .ext.has-text-color p {
            color: currentColor
        }

        .has-white-color {
            color: var(--wp--preset--color--white, #fff) !important
        }

        .has-black-color {
            color: var(--wp--preset--color--black, #000) !important
        }

        .has-ext-foreground-background-color {
            background-color: var(--wp--preset--color--foreground, var(--wp--preset--color--black, #000)) !important
        }

        .has-ext-primary-background-color {
            background-color: var(--wp--preset--color--primary, var(--wp--preset--color--cyan-bluish-gray, #000)) !important
        }

        .wp-block-button__link.has-black-background-color {
            border-color: var(--wp--preset--color--black, #000)
        }

        .wp-block-button__link.has-white-background-color {
            border-color: var(--wp--preset--color--white, #fff)
        }

        .has-ext-small-font-size {
            font-size: var(--wp--preset--font-size--ext-small) !important
        }

        .has-ext-medium-font-size {
            font-size: var(--wp--preset--font-size--ext-medium) !important
        }

        .has-ext-large-font-size {
            font-size: var(--wp--preset--font-size--ext-large) !important;
            line-height: 1.2
        }

        .has-ext-x-large-font-size {
            font-size: var(--wp--preset--font-size--ext-x-large) !important;
            line-height: 1
        }

        .has-ext-xx-large-font-size {
            font-size: var(--wp--preset--font-size--ext-xx-large) !important;
            line-height: 1
        }

        .has-ext-x-large-font-size:not([style*=line-height]),
        .has-ext-xx-large-font-size:not([style*=line-height]) {
            line-height: 1.1
        }

        .ext .wp-block-group>* {
            margin-bottom: 0;
            margin-top: 0
        }

        .ext .wp-block-group>*+* {
            margin-bottom: 0
        }

        .ext .wp-block-group>*+*,
        .ext h2 {
            margin-top: var(--wp--style--block-gap, 1.75rem)
        }

        .ext h2 {
            margin-bottom: var(--wp--style--block-gap, 1.75rem)
        }

        .has-ext-x-large-font-size+h3,
        .has-ext-x-large-font-size+p {
            margin-top: .5rem
        }

        .ext .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
            min-width: 12rem;
            width: calc(25% - var(--wp--style--block-gap, .5em)*.75)
        }

        .ext .ext-grid>[class*=_inner-container] {
            display: grid
        }

        .ext>[class*=_inner-container]>.ext-grid:not([class*=columns]),
        .ext>[class*=_inner-container]>.wp-block>.ext-grid:not([class*=columns]) {
            display: initial !important
        }

        .ext .ext-grid-cols-1>[class*=_inner-container] {
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-2>[class*=_inner-container] {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-3>[class*=_inner-container] {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-4>[class*=_inner-container] {
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-5>[class*=_inner-container] {
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-6>[class*=_inner-container] {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-7>[class*=_inner-container] {
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-8>[class*=_inner-container] {
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-9>[class*=_inner-container] {
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-10>[class*=_inner-container] {
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-11>[class*=_inner-container] {
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-12>[class*=_inner-container] {
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-13>[class*=_inner-container] {
            grid-template-columns: repeat(13, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-cols-none>[class*=_inner-container] {
            grid-template-columns: none !important
        }

        .ext .ext-grid-rows-1>[class*=_inner-container] {
            grid-template-rows: repeat(1, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-2>[class*=_inner-container] {
            grid-template-rows: repeat(2, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-3>[class*=_inner-container] {
            grid-template-rows: repeat(3, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-4>[class*=_inner-container] {
            grid-template-rows: repeat(4, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-5>[class*=_inner-container] {
            grid-template-rows: repeat(5, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-6>[class*=_inner-container] {
            grid-template-rows: repeat(6, minmax(0, 1fr)) !important
        }

        .ext .ext-grid-rows-none>[class*=_inner-container] {
            grid-template-rows: none !important
        }

        .ext .ext-items-start>[class*=_inner-container] {
            align-items: flex-start !important
        }

        .ext .ext-items-end>[class*=_inner-container] {
            align-items: flex-end !important
        }

        .ext .ext-items-center>[class*=_inner-container] {
            align-items: center !important
        }

        .ext .ext-items-baseline>[class*=_inner-container] {
            align-items: baseline !important
        }

        .ext .ext-items-stretch>[class*=_inner-container] {
            align-items: stretch !important
        }

        .ext.wp-block-group>:last-child {
            margin-bottom: 0
        }

        .ext .wp-block-group__inner-container {
            padding: 0 !important
        }

        .ext.has-background {
            padding-left: var(--wp--style--block-gap, 1.75rem);
            padding-right: var(--wp--style--block-gap, 1.75rem)
        }

        .ext [class*=inner-container]>.alignwide [class*=inner-container],
        .ext [class*=inner-container]>[data-align=wide] [class*=inner-container] {
            max-width: var(--responsive--alignwide-width, 120rem)
        }

        .ext [class*=inner-container]>.alignwide [class*=inner-container]>*,
        .ext [class*=inner-container]>[data-align=wide] [class*=inner-container]>* {
            max-width: 100% !important
        }

        .ext .wp-block-image {
            position: relative;
            text-align: center
        }

        .ext .wp-block-image img {
            display: inline-block;
            vertical-align: middle
        }

        body {
            --extendify--spacing--large: var(--wp--custom--spacing--large, clamp(2em, 8vw, 8em));
            --wp--preset--font-size--ext-small: 1rem;
            --wp--preset--font-size--ext-medium: 1.125rem;
            --wp--preset--font-size--ext-large: clamp(1.65rem, 3.5vw, 2.15rem);
            --wp--preset--font-size--ext-x-large: clamp(3rem, 6vw, 4.75rem);
            --wp--preset--font-size--ext-xx-large: clamp(3.25rem, 7.5vw, 5.75rem);
            --wp--preset--color--black: #000;
            --wp--preset--color--white: #fff
        }

        .ext * {
            box-sizing: border-box
        }

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .components-resizable-box__container {
            background: transparent !important
        }

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .block-library-spacer__resize-container:before {
            display: none !important
        }

        .ext .wp-block-group__inner-container figure.wp-block-gallery.alignfull {
            margin-bottom: unset;
            margin-top: unset
        }

        .ext .alignwide {
            margin-left: auto !important;
            margin-right: auto !important
        }

        .is-root-container.block-editor-block-list__layout>[data-align=full]:not(:first-of-type)>.ext-my-0,
        .is-root-container.block-editor-block-list__layout>[data-align=wide]>.ext-my-0:not([style*=margin]) {
            margin-top: calc(var(--wp--style--block-gap, 28px)*-1) !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-50 {
            min-height: 50vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-60 {
            min-height: 60vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-70 {
            min-height: 70vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-80 {
            min-height: 80vw !important
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-100 {
            min-height: 100vw !important
        }

        .ext-mr-0.alignfull:not([style*=margin]):not([style*=margin]) {
            margin-right: 0 !important
        }

        .ext-ml-0:not([style*=margin]):not([style*=margin]) {
            margin-left: 0 !important
        }

        .is-root-container .wp-block[data-align=full]>.ext-mx-0:not([style*=margin]):not([style*=margin]) {
            margin-left: calc(var(--wp--custom--spacing--outer, 0)*1) !important;
            margin-right: calc(var(--wp--custom--spacing--outer, 0)*1) !important;
            overflow: hidden;
            width: unset
        }

        @media (min-width:782px) {
            .tablet\:ext-absolute {
                position: absolute !important
            }

            .tablet\:ext-relative {
                position: relative !important
            }

            .tablet\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-top-lg {
                top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--top-lg {
                top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-right-lg {
                right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--right-lg {
                right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-left-lg {
                left: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--left-lg {
                left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-order-1 {
                order: 1 !important
            }

            .tablet\:ext-order-2 {
                order: 2 !important
            }

            .tablet\:ext-m-0:not([style*=margin]) {
                margin: 0 !important
            }

            .tablet\:ext-m-auto:not([style*=margin]) {
                margin: auto !important
            }

            .tablet\:ext-m-base:not([style*=margin]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-m-lg:not([style*=margin]) {
                margin: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--m-base:not([style*=margin]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--m-lg:not([style*=margin]) {
                margin: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mx-0:not([style*=margin]) {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .tablet\:ext-mx-auto:not([style*=margin]) {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .tablet\:ext-mx-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mx-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important;
                margin-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mx-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mx-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important;
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-my-0:not([style*=margin]) {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .tablet\:ext-my-auto:not([style*=margin]) {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .tablet\:ext-my-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-my-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important;
                margin-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--my-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--my-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important;
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mt-0:not([style*=margin]) {
                margin-top: 0 !important
            }

            .tablet\:ext-mt-auto:not([style*=margin]) {
                margin-top: auto !important
            }

            .tablet\:ext-mt-base:not([style*=margin]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mt-lg:not([style*=margin]) {
                margin-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mt-base:not([style*=margin]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mt-lg:not([style*=margin]) {
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mr-0:not([style*=margin]) {
                margin-right: 0 !important
            }

            .tablet\:ext-mr-auto:not([style*=margin]) {
                margin-right: auto !important
            }

            .tablet\:ext-mr-base:not([style*=margin]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mr-lg:not([style*=margin]) {
                margin-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mr-base:not([style*=margin]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mr-lg:not([style*=margin]) {
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-mb-0:not([style*=margin]) {
                margin-bottom: 0 !important
            }

            .tablet\:ext-mb-auto:not([style*=margin]) {
                margin-bottom: auto !important
            }

            .tablet\:ext-mb-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-mb-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--mb-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--mb-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-ml-0:not([style*=margin]) {
                margin-left: 0 !important
            }

            .tablet\:ext-ml-auto:not([style*=margin]) {
                margin-left: auto !important
            }

            .tablet\:ext-ml-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-ml-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important
            }

            .tablet\:ext--ml-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .tablet\:ext--ml-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .tablet\:ext-block {
                display: block !important
            }

            .tablet\:ext-inline-block {
                display: inline-block !important
            }

            .tablet\:ext-inline {
                display: inline !important
            }

            .tablet\:ext-flex {
                display: flex !important
            }

            .tablet\:ext-inline-flex {
                display: inline-flex !important
            }

            .tablet\:ext-grid {
                display: grid !important
            }

            .tablet\:ext-inline-grid {
                display: inline-grid !important
            }

            .tablet\:ext-hidden {
                display: none !important
            }

            .tablet\:ext-w-auto {
                width: auto !important
            }

            .tablet\:ext-w-full {
                width: 100% !important
            }

            .tablet\:ext-max-w-full {
                max-width: 100% !important
            }

            .tablet\:ext-flex-1 {
                flex: 1 1 0% !important
            }

            .tablet\:ext-flex-auto {
                flex: 1 1 auto !important
            }

            .tablet\:ext-flex-initial {
                flex: 0 1 auto !important
            }

            .tablet\:ext-flex-none {
                flex: none !important
            }

            .tablet\:ext-flex-shrink-0 {
                flex-shrink: 0 !important
            }

            .tablet\:ext-flex-shrink {
                flex-shrink: 1 !important
            }

            .tablet\:ext-flex-grow-0 {
                flex-grow: 0 !important
            }

            .tablet\:ext-flex-grow {
                flex-grow: 1 !important
            }

            .tablet\:ext-list-none {
                list-style-type: none !important
            }

            .tablet\:ext-grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-7 {
                grid-template-columns: repeat(7, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-8 {
                grid-template-columns: repeat(8, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-9 {
                grid-template-columns: repeat(9, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-10 {
                grid-template-columns: repeat(10, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-11 {
                grid-template-columns: repeat(11, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr)) !important
            }

            .tablet\:ext-grid-cols-none {
                grid-template-columns: none !important
            }

            .tablet\:ext-flex-row {
                flex-direction: row !important
            }

            .tablet\:ext-flex-row-reverse {
                flex-direction: row-reverse !important
            }

            .tablet\:ext-flex-col {
                flex-direction: column !important
            }

            .tablet\:ext-flex-col-reverse {
                flex-direction: column-reverse !important
            }

            .tablet\:ext-flex-wrap {
                flex-wrap: wrap !important
            }

            .tablet\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .tablet\:ext-flex-nowrap {
                flex-wrap: nowrap !important
            }

            .tablet\:ext-items-start {
                align-items: flex-start !important
            }

            .tablet\:ext-items-end {
                align-items: flex-end !important
            }

            .tablet\:ext-items-center {
                align-items: center !important
            }

            .tablet\:ext-items-baseline {
                align-items: baseline !important
            }

            .tablet\:ext-items-stretch {
                align-items: stretch !important
            }

            .tablet\:ext-justify-start {
                justify-content: flex-start !important
            }

            .tablet\:ext-justify-end {
                justify-content: flex-end !important
            }

            .tablet\:ext-justify-center {
                justify-content: center !important
            }

            .tablet\:ext-justify-between {
                justify-content: space-between !important
            }

            .tablet\:ext-justify-around {
                justify-content: space-around !important
            }

            .tablet\:ext-justify-evenly {
                justify-content: space-evenly !important
            }

            .tablet\:ext-justify-items-start {
                justify-items: start !important
            }

            .tablet\:ext-justify-items-end {
                justify-items: end !important
            }

            .tablet\:ext-justify-items-center {
                justify-items: center !important
            }

            .tablet\:ext-justify-items-stretch {
                justify-items: stretch !important
            }

            .tablet\:ext-justify-self-auto {
                justify-self: auto !important
            }

            .tablet\:ext-justify-self-start {
                justify-self: start !important
            }

            .tablet\:ext-justify-self-end {
                justify-self: end !important
            }

            .tablet\:ext-justify-self-center {
                justify-self: center !important
            }

            .tablet\:ext-justify-self-stretch {
                justify-self: stretch !important
            }

            .tablet\:ext-p-0:not([style*=padding]) {
                padding: 0 !important
            }

            .tablet\:ext-p-base:not([style*=padding]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-p-lg:not([style*=padding]) {
                padding: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-px-0:not([style*=padding]) {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .tablet\:ext-px-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-px-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important;
                padding-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-py-0:not([style*=padding]) {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .tablet\:ext-py-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-py-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important;
                padding-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pt-0:not([style*=padding]) {
                padding-top: 0 !important
            }

            .tablet\:ext-pt-base:not([style*=padding]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pt-lg:not([style*=padding]) {
                padding-top: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pr-0:not([style*=padding]) {
                padding-right: 0 !important
            }

            .tablet\:ext-pr-base:not([style*=padding]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pr-lg:not([style*=padding]) {
                padding-right: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pb-0:not([style*=padding]) {
                padding-bottom: 0 !important
            }

            .tablet\:ext-pb-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pb-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-pl-0:not([style*=padding]) {
                padding-left: 0 !important
            }

            .tablet\:ext-pl-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .tablet\:ext-pl-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important
            }

            .tablet\:ext-text-left {
                text-align: left !important
            }

            .tablet\:ext-text-center {
                text-align: center !important
            }

            .tablet\:ext-text-right {
                text-align: right !important
            }
        }

        @media (min-width:1080px) {
            .desktop\:ext-absolute {
                position: absolute !important
            }

            .desktop\:ext-relative {
                position: relative !important
            }

            .desktop\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-top-lg {
                top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--top-lg {
                top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-right-lg {
                right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--right-lg {
                right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-left-lg {
                left: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--left-lg {
                left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-order-1 {
                order: 1 !important
            }

            .desktop\:ext-order-2 {
                order: 2 !important
            }

            .desktop\:ext-m-0:not([style*=margin]) {
                margin: 0 !important
            }

            .desktop\:ext-m-auto:not([style*=margin]) {
                margin: auto !important
            }

            .desktop\:ext-m-base:not([style*=margin]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-m-lg:not([style*=margin]) {
                margin: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--m-base:not([style*=margin]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--m-lg:not([style*=margin]) {
                margin: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mx-0:not([style*=margin]) {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .desktop\:ext-mx-auto:not([style*=margin]) {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .desktop\:ext-mx-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mx-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important;
                margin-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mx-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mx-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important;
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-my-0:not([style*=margin]) {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .desktop\:ext-my-auto:not([style*=margin]) {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .desktop\:ext-my-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-my-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important;
                margin-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--my-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important;
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--my-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important;
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mt-0:not([style*=margin]) {
                margin-top: 0 !important
            }

            .desktop\:ext-mt-auto:not([style*=margin]) {
                margin-top: auto !important
            }

            .desktop\:ext-mt-base:not([style*=margin]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mt-lg:not([style*=margin]) {
                margin-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mt-base:not([style*=margin]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mt-lg:not([style*=margin]) {
                margin-top: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mr-0:not([style*=margin]) {
                margin-right: 0 !important
            }

            .desktop\:ext-mr-auto:not([style*=margin]) {
                margin-right: auto !important
            }

            .desktop\:ext-mr-base:not([style*=margin]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mr-lg:not([style*=margin]) {
                margin-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mr-base:not([style*=margin]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mr-lg:not([style*=margin]) {
                margin-right: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-mb-0:not([style*=margin]) {
                margin-bottom: 0 !important
            }

            .desktop\:ext-mb-auto:not([style*=margin]) {
                margin-bottom: auto !important
            }

            .desktop\:ext-mb-base:not([style*=margin]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-mb-lg:not([style*=margin]) {
                margin-bottom: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--mb-base:not([style*=margin]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--mb-lg:not([style*=margin]) {
                margin-bottom: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-ml-0:not([style*=margin]) {
                margin-left: 0 !important
            }

            .desktop\:ext-ml-auto:not([style*=margin]) {
                margin-left: auto !important
            }

            .desktop\:ext-ml-base:not([style*=margin]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-ml-lg:not([style*=margin]) {
                margin-left: var(--extendify--spacing--large) !important
            }

            .desktop\:ext--ml-base:not([style*=margin]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem)*-1) !important
            }

            .desktop\:ext--ml-lg:not([style*=margin]) {
                margin-left: calc(var(--extendify--spacing--large)*-1) !important
            }

            .desktop\:ext-block {
                display: block !important
            }

            .desktop\:ext-inline-block {
                display: inline-block !important
            }

            .desktop\:ext-inline {
                display: inline !important
            }

            .desktop\:ext-flex {
                display: flex !important
            }

            .desktop\:ext-inline-flex {
                display: inline-flex !important
            }

            .desktop\:ext-grid {
                display: grid !important
            }

            .desktop\:ext-inline-grid {
                display: inline-grid !important
            }

            .desktop\:ext-hidden {
                display: none !important
            }

            .desktop\:ext-w-auto {
                width: auto !important
            }

            .desktop\:ext-w-full {
                width: 100% !important
            }

            .desktop\:ext-max-w-full {
                max-width: 100% !important
            }

            .desktop\:ext-flex-1 {
                flex: 1 1 0% !important
            }

            .desktop\:ext-flex-auto {
                flex: 1 1 auto !important
            }

            .desktop\:ext-flex-initial {
                flex: 0 1 auto !important
            }

            .desktop\:ext-flex-none {
                flex: none !important
            }

            .desktop\:ext-flex-shrink-0 {
                flex-shrink: 0 !important
            }

            .desktop\:ext-flex-shrink {
                flex-shrink: 1 !important
            }

            .desktop\:ext-flex-grow-0 {
                flex-grow: 0 !important
            }

            .desktop\:ext-flex-grow {
                flex-grow: 1 !important
            }

            .desktop\:ext-list-none {
                list-style-type: none !important
            }

            .desktop\:ext-grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-7 {
                grid-template-columns: repeat(7, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-8 {
                grid-template-columns: repeat(8, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-9 {
                grid-template-columns: repeat(9, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-10 {
                grid-template-columns: repeat(10, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-11 {
                grid-template-columns: repeat(11, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr)) !important
            }

            .desktop\:ext-grid-cols-none {
                grid-template-columns: none !important
            }

            .desktop\:ext-flex-row {
                flex-direction: row !important
            }

            .desktop\:ext-flex-row-reverse {
                flex-direction: row-reverse !important
            }

            .desktop\:ext-flex-col {
                flex-direction: column !important
            }

            .desktop\:ext-flex-col-reverse {
                flex-direction: column-reverse !important
            }

            .desktop\:ext-flex-wrap {
                flex-wrap: wrap !important
            }

            .desktop\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .desktop\:ext-flex-nowrap {
                flex-wrap: nowrap !important
            }

            .desktop\:ext-items-start {
                align-items: flex-start !important
            }

            .desktop\:ext-items-end {
                align-items: flex-end !important
            }

            .desktop\:ext-items-center {
                align-items: center !important
            }

            .desktop\:ext-items-baseline {
                align-items: baseline !important
            }

            .desktop\:ext-items-stretch {
                align-items: stretch !important
            }

            .desktop\:ext-justify-start {
                justify-content: flex-start !important
            }

            .desktop\:ext-justify-end {
                justify-content: flex-end !important
            }

            .desktop\:ext-justify-center {
                justify-content: center !important
            }

            .desktop\:ext-justify-between {
                justify-content: space-between !important
            }

            .desktop\:ext-justify-around {
                justify-content: space-around !important
            }

            .desktop\:ext-justify-evenly {
                justify-content: space-evenly !important
            }

            .desktop\:ext-justify-items-start {
                justify-items: start !important
            }

            .desktop\:ext-justify-items-end {
                justify-items: end !important
            }

            .desktop\:ext-justify-items-center {
                justify-items: center !important
            }

            .desktop\:ext-justify-items-stretch {
                justify-items: stretch !important
            }

            .desktop\:ext-justify-self-auto {
                justify-self: auto !important
            }

            .desktop\:ext-justify-self-start {
                justify-self: start !important
            }

            .desktop\:ext-justify-self-end {
                justify-self: end !important
            }

            .desktop\:ext-justify-self-center {
                justify-self: center !important
            }

            .desktop\:ext-justify-self-stretch {
                justify-self: stretch !important
            }

            .desktop\:ext-p-0:not([style*=padding]) {
                padding: 0 !important
            }

            .desktop\:ext-p-base:not([style*=padding]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-p-lg:not([style*=padding]) {
                padding: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-px-0:not([style*=padding]) {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .desktop\:ext-px-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-px-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important;
                padding-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-py-0:not([style*=padding]) {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .desktop\:ext-py-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-py-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important;
                padding-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pt-0:not([style*=padding]) {
                padding-top: 0 !important
            }

            .desktop\:ext-pt-base:not([style*=padding]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pt-lg:not([style*=padding]) {
                padding-top: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pr-0:not([style*=padding]) {
                padding-right: 0 !important
            }

            .desktop\:ext-pr-base:not([style*=padding]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pr-lg:not([style*=padding]) {
                padding-right: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pb-0:not([style*=padding]) {
                padding-bottom: 0 !important
            }

            .desktop\:ext-pb-base:not([style*=padding]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pb-lg:not([style*=padding]) {
                padding-bottom: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-pl-0:not([style*=padding]) {
                padding-left: 0 !important
            }

            .desktop\:ext-pl-base:not([style*=padding]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important
            }

            .desktop\:ext-pl-lg:not([style*=padding]) {
                padding-left: var(--extendify--spacing--large) !important
            }

            .desktop\:ext-text-left {
                text-align: left !important
            }

            .desktop\:ext-text-center {
                text-align: center !important
            }

            .desktop\:ext-text-right {
                text-align: right !important
            }
        }

    </style>
    <link rel='stylesheet' id='ct-main-css-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-core/assets/css/ct-main-css.min.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='progressbar-lib-css-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-core/assets/css/lib/progressbar.min.css?ver=0.7.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='oc-css-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-core/assets/css/lib/owl.carousel.min.css?ver=2.2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ct-slick-css-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-core/assets/css/lib/ct-slick-css.min.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ct-font-awesome-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-core/assets/plugin/font-awesome/css/font-awesome.min.css?ver=4.7.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='remodal-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-user/acess/css/remodal.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='remodal-default-theme-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-user/acess/css/remodal-default-theme.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/contact-form-7/includes/css/contact-form-7.min.css?ver=5.5.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/revslider/public/assets/css/rs-plugin-settings.min.css?ver=6.2.22'
        type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}

    </style>
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.min.css?ver=6.2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.min.css?ver=6.2.1'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/css/woocommerce-general.min.css?ver=6.2.1'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }

    </style>
    <link rel='stylesheet' id='ppress-frontend-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/wp-user-avatar/assets/css/frontend.min.css?ver=3.2.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ppress-flatpickr-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min.css?ver=3.2.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ppress-select2-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/wp-user-avatar/assets/select2/select2.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='hint-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-compare/assets/libs/hint/hint.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='perfect-scrollbar-wpc-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/css/perfect-scrollbar-wpc.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosc-frontend-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-compare/assets/css/woosc-frontend.min.css?ver=4.2.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosq-feather-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-quick-view/assets/libs/feather/woosq-feather.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosq-frontend-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-quick-view/assets/css/woosq-frontend.min.css?ver=2.8.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-feather-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-wishlist/assets/libs/feather/woosw-feather.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woosw-frontend-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-wishlist/assets/css/woosw-frontend.min.css?ver=2.9.6'
        type='text/css' media='all' />
    <style id='woosw-frontend-inline-css' type='text/css'>
        .woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-notice {
            background-color: #76a713;
        }

        .woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-page a:hover,
        .woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-continue:hover {
            color: #76a713;
        }

    </style>
    <link rel='stylesheet' id='bootstrap-css'
        href='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/css/bootstrap.min.css?ver=4.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='caseicon-css'
        href='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/css/caseicon.min.css?ver=1.5.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css'
        href='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/css/flaticon.min.css?ver=1.5.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'
        href='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/css/animate.min.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='organio-theme-css'
        href='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/css/organio-theme.min.css?ver=1.5.0'
        type='text/css' media='all' />
    <style id='organio-theme-inline-css' type='text/css'>
        @media screen and (max-width: 1199px) {}

        @media screen and (min-width: 1200px) {}

    </style>
    <link rel='stylesheet' id='organio-style-css'
        href='https://demo.casethemes.net/organio/wp-content/themes/orgio/organio-style.min.css?ver=5.9.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.14.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.5.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-12-css'
        href='https://demo.casethemes.net/organio/wp-content/uploads/elementor/css/post-12.css?ver=1648277083'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://demo.casethemes.net/organio/wp-content/uploads/elementor/css/global.css?ver=1648277083'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-14-css'
        href='https://demo.casethemes.net/organio/wp-content/uploads/elementor/css/post-14.css?ver=1648277084'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woo-variation-swatches-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min.css?ver=1.1.19'
        type='text/css' media='all' />
    <style id='woo-variation-swatches-inline-css' type='text/css'>
        .variable-item:not(.radio-variable-item) {
            width: 30px;
            height: 30px;
        }

        .wvs-style-squared .button-variable-item {
            min-width: 30px;
        }

        .button-variable-item span {
            font-size: 16px;
        }

    </style>
    <link rel='stylesheet' id='woo-variation-swatches-theme-override-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-variation-swatches/assets/css/wvs-theme-override.min.css?ver=1.1.19'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woo-variation-swatches-tooltip-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/woo-variation-swatches/assets/css/frontend-tooltip.min.css?ver=1.1.19'
        type='text/css' media='all' />
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">data.variation.variation_description</div><div class="woocommerce-variation-price">data.variation.price_html</div><div class="woocommerce-variation-availability"> data.variation.availability_html</div>
        </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p> </script>
    <script type='text/javascript' src='https://demo.casethemes.net/organio/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'
        id='jquery-core-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/ct-main-js.min.js?ver=1.0.0'
        id='ct-main-js-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.2.22'
        id='tp-tools-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.2.22'
        id='revmin-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/wp-user-avatar/assets/flatpickr/flatpickr.min.js?ver=5.9.2'
        id='ppress-flatpickr-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/wp-user-avatar/assets/select2/select2.min.js?ver=5.9.2'
        id='ppress-select2-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/ct-inline-css-js.min.js?ver=1.5.0'
        id='ct-inline-css-js-js'></script>
    <link rel="https://api.w.org/" href="https://demo.casethemes.net/organio/wp-json/" />
    <link rel="alternate" type="application/json" href="https://demo.casethemes.net/organio/wp-json/wp/v2/pages/14" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://demo.casethemes.net/organio/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://demo.casethemes.net/organio/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.9.2" />
    <meta name="generator" content="WooCommerce 6.2.1" />
    <link rel="canonical" href="https://demo.casethemes.net/organio/" />
    <link rel='shortlink' href='https://demo.casethemes.net/organio/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://demo.casethemes.net/organio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.casethemes.net%2Forganio%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://demo.casethemes.net/organio/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.casethemes.net%2Forganio%2F&#038;format=xml" />
    <meta name="generator" content="Redux 4.3.11" />
    <link rel="icon" type="image/png"
        href="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/favicon.png" /> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }

        </style>
    </noscript>
    <meta name="generator"
        content="Powered by Slider Revolution 6.2.22 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement(
                    "style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        @media screen and (max-width: 767px) {

            .single-product #primary div.product .woocommerce-tabs .woocommerce-Tabs-panel--reviews #reviews #review_form_wrapper,
            .single-product>div.product .woocommerce-tabs .woocommerce-Tabs-panel--reviews #reviews #review_form_wrapper {
                width: 100%;
            }

            .single-product #primary div.product .woocommerce-tabs .woocommerce-Tabs-panel--reviews #reviews #comments,
            .single-product>div.product .woocommerce-tabs .woocommerce-Tabs-panel--reviews #reviews #comments {
                width: 100%;
            }
        }

        @media screen and (max-width: 767px) {
            .site-footer-custom {
                overflow: hidden;
            }
        }

    </style>
    <style id="ct_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">
        .ct-main-menu>li>a,
        body .ct-main-menu .sub-menu li a {
            font-display: swap;
        }

        body #pagetitle {
            background-image: url('https://demo.casethemes.net/organio/wp-content/uploads/2021/03/bg-page-title.jpg');
        }

        a {
            color: #76a713;
        }

        a:hover {
            color: #ff7800;
        }

        a:active {
            color: #ff7800;
        }

        body {
            font-display: swap;
        }

        h1,
        .h1,
        .text-heading {
            font-display: swap;
        }

        h2,
        .h2 {
            font-display: swap;
        }

        h3,
        .h3 {
            font-display: swap;
        }

        h4,
        .h4 {
            font-display: swap;
        }

        h5,
        .h5 {
            font-display: swap;
        }

        h6,
        .h6 {
            font-display: swap;
        }

    </style>
    <style id="ct-page-dynamic-css" data-type="redux-output-css">
        #content {
            padding-top: 0px;
            padding-bottom: 0px;
        }

    </style>
</head>

<body
    class="home page-template-default page page-id-14 theme-orgio woocommerce-no-js woo-variation-swatches woo-variation-swatches-on-mobile wvs-theme-orgio wvs-theme-child-orgio wvs-style-squared wvs-attr-behavior-blur wvs-tooltip wvs-css wvs-show-label redux-page  site-h1 body-default-font heading-default-font header-sticky  site-404-default elementor-default elementor-kit-12 elementor-page elementor-page-14">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <div id="page" class="site">
        <div id="ct-loadding" class="ct-loader style5">
            <div class="ct-spinner5">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <header id="ct-masthead">
            <div id="ct-header-wrap" class="ct-header-layout1 item-menu-style1 fixed-height  is-sticky scroll-to-bottom"
                data-offset-sticky="100">
                <div id="ct-header-top" class="ct-header-top1">
                    <div class="container">
                        <div class="row">
                            <div class="ct-topbar-wellcome"> Welcome to our Organic store <span>Organico!</span></div>
                            <div class="ct-topbar-cart">
                                <div class="header-right-item h-btn-cart"> <i class="caseicon-shopping-cart"></i> Cart:
                                    <span class="widget_cart_counter_header">0 - <span class="cart-total"><span
                                                class="woocommerce-Price-amount amount"><bdi><span
                                                        class="woocommerce-Price-currencySymbol">&#36;</span>0.00</bdi></span></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ct-header" class="ct-header-main">
                    <div class="container">
                        <div class="row">
                            <div class="ct-header-navigation ct-header-navigation-left">
                                <nav class="ct-main-navigation">
                                    <div class="ct-main-navigation-inner">
                                        <ul id="ct-main-menu-left" class="ct-main-menu children-arrow clearfix">
                                            <li id="menu-item-23"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14 current_page_item megamenu megamenu-style-alt menu-item-has-children menu-item-23">
                                                <a href="/"
                                                    aria-current="page"><span>Accueil</span></a>
                                            </li>
                                            <li id="menu-item-22"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
                                                <a
                                                    href="https://demo.casethemes.net/organio/about/"><span>About</span></a>
                                            </li>
                                            <li id="menu-item-24"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24">
                                                <a href="#"><span>Pages</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-181"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/services/"><span>Services</span></a>
                                                    </li>
                                                    <li id="menu-item-1579"
                                                        class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1579">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/service/organic-store-services/"><span>Single
                                                                Service</span></a>
                                                    </li>
                                                    <li id="menu-item-182"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-182">
                                                        <a href="https://demo.casethemes.net/organio/team/"><span>Our
                                                                Team</span></a>
                                                    </li>
                                                    <li id="menu-item-4529"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4529">
                                                        <a href="https://demo.casethemes.net/organio/contact-us/"><span>Contact
                                                                Us</span></a>
                                                    </li>
                                                    <li id="menu-item-978"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-978">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/testimonials/"><span>Testimonials</span></a>
                                                    </li>
                                                    <li id="menu-item-3718"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3718">
                                                        <a href="#"><span>User Pages</span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-3720"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3720">
                                                                <a href="https://demo.casethemes.net/organio/sign-in/"><span>Sign
                                                                        In</span></a>
                                                            </li>
                                                            <li id="menu-item-3719"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3719">
                                                                <a href="https://demo.casethemes.net/organio/sign-up/"><span>Sign
                                                                        Up</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-183"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-183">
                                                        <a href="https://demo.casethemes.net/organio/404-page"><span>404
                                                                Page</span></a>
                                                    </li>
                                                    <li id="menu-item-3717"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3717">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/landing/"><span>Landing</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-25"
                                                class="menu-item menu-item-type-post_type menu-item-object-page megamenu megamenu-style-alt menu-item-has-children menu-item-25">
                                                <a
                                                    href="https://demo.casethemes.net/organio/shop/"><span>Shop</span></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div data-elementor-type="wp-post" data-elementor-id="5090"
                                                                class="elementor elementor-5090"
                                                                data-elementor-settings="[]">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-2fddfa6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                        data-id="2fddfa6" data-element_type="section"
                                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-extended ">
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1fcd143"
                                                                                data-id="1fcd143"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-54ad0b1 elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="54ad0b1"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Product
                                                                                                        Layout</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-1226cea elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="1226cea"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-2-columns/">
                                                                                                            <span>Grid 2
                                                                                                                Columns</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-3-columns/">
                                                                                                            <span>Grid 3
                                                                                                                Columns</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-4-columns/">
                                                                                                            <span>Grid 4
                                                                                                                Columns</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-4-columns-full-width/">
                                                                                                            <span>Grid 4
                                                                                                                Columns
                                                                                                                Wide</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-bba0642"
                                                                                data-id="bba0642"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-77a904a elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="77a904a"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Product
                                                                                                        Layout</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-82bcedb elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="82bcedb"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/shop/?sidebar-shop=left">
                                                                                                            <span>Grid
                                                                                                                Left
                                                                                                                Sidebar</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/shop/?sidebar-shop=right">
                                                                                                            <span>Grid
                                                                                                                Right
                                                                                                                Sidebar</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/shop/?shop-layout=list">
                                                                                                            <span>Product
                                                                                                                List</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-masonry/">
                                                                                                            <span>Product
                                                                                                                Masonry</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-b607ae7"
                                                                                data-id="b607ae7"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-9ae596f elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="9ae596f"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Product
                                                                                                        Types</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-4546b12 elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="4546b12"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/indigi-teas/">
                                                                                                            <span>Simple</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/organic-juice/">
                                                                                                            <span>Variable</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/raw-cashew-butter/">
                                                                                                            <span>External</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/blueberry-cookies/">
                                                                                                            <span>Grouped</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1687b2d"
                                                                                data-id="1687b2d"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-584856a elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="584856a"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Shop
                                                                                                        Pages</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-11cf14d elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="11cf14d"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/sign-in/">
                                                                                                            <span>My
                                                                                                                Account</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/cart/">
                                                                                                            <span>Cart</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/checkout/">
                                                                                                            <span>Checkout</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/wishlist/">
                                                                                                            <span>Wishlist</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-d6f509e"
                                                                                data-id="d6f509e"
                                                                                data-element_type="column">
                                                                                <div class="elementor-widget-wrap">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="ct-header-branding">
                                <div class="ct-header-branding-inner"> <a class="logo-dark"
                                        href="https://demo.casethemes.net/organio/" title="Organio" rel="home"><img
                                            src="https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/images/logo-dark.png"
                                            alt="Organio" /></a><a class="logo-light"
                                        href="https://demo.casethemes.net/organio/" title="Organio" rel="home"><img
                                            src="https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/images/logo-light.png"
                                            alt="Organio" /></a><a class="logo-mobile"
                                        href="https://demo.casethemes.net/organio/" title="Organio" rel="home"><img
                                            src="https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/images/logo-mobile.png"
                                            alt="Organio" /></a></div>
                            </div>
                            <div class="ct-header-navigation ct-header-navigation-right">
                                <nav class="ct-main-navigation">
                                    <div class="ct-main-navigation-inner">
                                        <div class="ct-logo-mobile"> <a href="" title="" rel="home"><img
                                                    src="https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/images/logo-mobile.png"
                                                    alt="" /></a></div>
                                        <div class="header-mobile-search">
                                            <form role="search" method="get"
                                                action="https://demo.casethemes.net/organio/"> <input type="text"
                                                    placeholder="Search..." name="s" class="search-field" /> <button
                                                    type="submit" class="search-submit"><i
                                                        class="caseicon-search"></i></button></form>
                                        </div>
                                        <ul id="ct-main-menu-left-mobile" class="ct-main-menu children-arrow clearfix">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14 current_page_item megamenu megamenu-style-alt menu-item-has-children menu-item-23">
                                                <a href="https://demo.casethemes.net/organio/"
                                                    aria-current="page"><span>Home</span></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div data-elementor-type="wp-post" data-elementor-id="2655"
                                                                class="elementor elementor-2655"
                                                                data-elementor-settings="[]">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-009f6f8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                        data-id="009f6f8" data-element_type="section">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-extended ">
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-cd2dfe6"
                                                                                data-id="cd2dfe6"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-e1ebd66 elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="e1ebd66"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/demo1.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>01</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-f6a14cc elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="f6a14cc"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-6/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/07/demo6.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>06</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-89c2ad2"
                                                                                data-id="89c2ad2"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-5d412ae elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="5d412ae"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-2/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/demo3.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>02</cite>
                                                                                                    (Megashop)</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-2a840f7 elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="2a840f7"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-7/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/demo-07.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>07</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-70413e4"
                                                                                data-id="70413e4"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-56f1876 elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="56f1876"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-3/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/demo2.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>03</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-b408244 elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="b408244"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-8/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/demo-08.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>08</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-8e89d35"
                                                                                data-id="8e89d35"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-f1b8f52 elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="f1b8f52"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-4/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/demo4.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>04</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-cc4c41f elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="cc4c41f"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <label>NEW</label>
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-9/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/09/demo-09.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>09</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-b1769ad"
                                                                                data-id="b1769ad"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-5dce68f elementor-widget elementor-widget-ct_showcase"
                                                                                        data-id="5dce68f"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_showcase.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div class="ct-showcase "
                                                                                                data-wow-delay="ms">
                                                                                                <div
                                                                                                    class="ct-showcase-image">
                                                                                                    <a
                                                                                                        href="https://demo.casethemes.net/organio/home-5/">
                                                                                                        <img width="400"
                                                                                                            height="500"
                                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/04/demo5.jpg"
                                                                                                            class="attachment-full"
                                                                                                            alt="" />
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="ct-showcase-title">
                                                                                                    Home <cite>05</cite>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
                                                <a
                                                    href="https://demo.casethemes.net/organio/about/"><span>About</span></a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24">
                                                <a href="#"><span>Pages</span></a>
                                                <ul class="sub-menu">
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/services/"><span>Services</span></a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1579">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/service/organic-store-services/"><span>Single
                                                                Service</span></a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-182">
                                                        <a href="https://demo.casethemes.net/organio/team/"><span>Our
                                                                Team</span></a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4529">
                                                        <a href="https://demo.casethemes.net/organio/contact-us/"><span>Contact
                                                                Us</span></a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-978">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/testimonials/"><span>Testimonials</span></a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3718">
                                                        <a href="#"><span>User Pages</span></a>
                                                        <ul class="sub-menu">
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3720">
                                                                <a href="https://demo.casethemes.net/organio/sign-in/"><span>Sign
                                                                        In</span></a>
                                                            </li>
                                                            <li
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3719">
                                                                <a href="https://demo.casethemes.net/organio/sign-up/"><span>Sign
                                                                        Up</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-183">
                                                        <a href="https://demo.casethemes.net/organio/404-page"><span>404
                                                                Page</span></a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3717">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/landing/"><span>Landing</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page megamenu megamenu-style-alt menu-item-has-children menu-item-25">
                                                <a
                                                    href="https://demo.casethemes.net/organio/shop/"><span>Shop</span></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div data-elementor-type="wp-post" data-elementor-id="5090"
                                                                class="elementor elementor-5090"
                                                                data-elementor-settings="[]">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-2fddfa6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                        data-id="2fddfa6" data-element_type="section"
                                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-extended ">
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1fcd143"
                                                                                data-id="1fcd143"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-54ad0b1 elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="54ad0b1"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Product
                                                                                                        Layout</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-1226cea elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="1226cea"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-2-columns/">
                                                                                                            <span>Grid 2
                                                                                                                Columns</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-3-columns/">
                                                                                                            <span>Grid 3
                                                                                                                Columns</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-4-columns/">
                                                                                                            <span>Grid 4
                                                                                                                Columns</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-grid-4-columns-full-width/">
                                                                                                            <span>Grid 4
                                                                                                                Columns
                                                                                                                Wide</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-bba0642"
                                                                                data-id="bba0642"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-77a904a elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="77a904a"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Product
                                                                                                        Layout</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-82bcedb elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="82bcedb"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/shop/?sidebar-shop=left">
                                                                                                            <span>Grid
                                                                                                                Left
                                                                                                                Sidebar</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/shop/?sidebar-shop=right">
                                                                                                            <span>Grid
                                                                                                                Right
                                                                                                                Sidebar</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/shop/?shop-layout=list">
                                                                                                            <span>Product
                                                                                                                List</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product-masonry/">
                                                                                                            <span>Product
                                                                                                                Masonry</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-b607ae7"
                                                                                data-id="b607ae7"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-9ae596f elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="9ae596f"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Product
                                                                                                        Types</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-4546b12 elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="4546b12"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/indigi-teas/">
                                                                                                            <span>Simple</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/organic-juice/">
                                                                                                            <span>Variable</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/raw-cashew-butter/">
                                                                                                            <span>External</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/product/blueberry-cookies/">
                                                                                                            <span>Grouped</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1687b2d"
                                                                                data-id="1687b2d"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-584856a elementor-widget elementor-widget-ct_heading"
                                                                                        data-id="584856a"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-heading h-align- item-st-default">
                                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                                    data-wow-delay="ms">
                                                                                                    <span>Shop
                                                                                                        Pages</span>
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-11cf14d elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="11cf14d"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/sign-in/">
                                                                                                            <span>My
                                                                                                                Account</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/cart/">
                                                                                                            <span>Cart</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/checkout/">
                                                                                                            <span>Checkout</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/wishlist/">
                                                                                                            <span>Wishlist</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-d6f509e"
                                                                                data-id="d6f509e"
                                                                                data-element_type="column">
                                                                                <div class="elementor-widget-wrap">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul id="ct-main-menu-right" class="ct-main-menu children-arrow clearfix">
                                            <li id="menu-item-372"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-372">
                                                <a
                                                    href="https://demo.casethemes.net/organio/portfolio-grid/"><span>Portfolio</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-373"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-373">
                                                        <a href="https://demo.casethemes.net/organio/portfolio-grid/"><span>Portfolio
                                                                Grid</span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-433"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-433">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-grid-2-columns/"><span>2
                                                                        Columns</span></a>
                                                            </li>
                                                            <li id="menu-item-432"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-432">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-grid-3-columns/"><span>3
                                                                        Columns</span></a>
                                                            </li>
                                                            <li id="menu-item-434"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-434">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-grid/"><span>4
                                                                        Columns</span></a>
                                                            </li>
                                                            <li id="menu-item-431"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-431">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-grid-4-columns-wide/"><span>4
                                                                        Columns Wide</span></a>
                                                            </li>
                                                            <li id="menu-item-630"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-630">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-grid-3-columns-full-width-no-space/"><span>Full
                                                                        Width No Space</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-387"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-387">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/portfolio-masonry/"><span>Portfolio
                                                                Masonry</span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-506"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-506">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-masonry/"><span>Portfolio
                                                                        Masonry 1</span></a>
                                                            </li>
                                                            <li id="menu-item-505"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-505">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-masonry-2/"><span>Portfolio
                                                                        Masonry 2</span></a>
                                                            </li>
                                                            <li id="menu-item-504"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-504">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/portfolio-masonry-3/"><span>Portfolio
                                                                        Masonry 3</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-3723"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3723">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/portfolio-gallery/"><span>Portfolio
                                                                Gallery</span></a>
                                                    </li>
                                                    <li id="menu-item-1580"
                                                        class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-1580">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/portfolio/holding-fresh-radishes/"><span>Single
                                                                Portfolio</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-27"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-27">
                                                <a
                                                    href="https://demo.casethemes.net/organio/blog/"><span>Blog</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-332"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332">
                                                        <a href="https://demo.casethemes.net/organio/blog-carousel/"><span>Blog
                                                                Carousel</span></a>
                                                    </li>
                                                    <li id="menu-item-135"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-135">
                                                        <a href="https://demo.casethemes.net/organio/blog/"><span>Blog
                                                                List</span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-324"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-324">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/blog-list-left-sidebar/"><span>Left
                                                                        Sidebar</span></a>
                                                            </li>
                                                            <li id="menu-item-323"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-323">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/blog-list-full-width/"><span>Full
                                                                        Width</span></a>
                                                            </li>
                                                            <li id="menu-item-325"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-325">
                                                                <a href="https://demo.casethemes.net/organio/blog/"><span>Right
                                                                        Sidebar</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-5114"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5114">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/blog-grid-3-columns/"><span>Blog
                                                                Grid</span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-242"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/blog-grid-2-columns/"><span>2
                                                                        Columns</span></a>
                                                            </li>
                                                            <li id="menu-item-244"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/blog-grid-2-columns-left-sidebar/"><span>2
                                                                        Columns : Left Sidebar</span></a>
                                                            </li>
                                                            <li id="menu-item-243"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/blog-grid-2-columns-right-sidebar/"><span>2
                                                                        Columns : Right Sidebar</span></a>
                                                            </li>
                                                            <li id="menu-item-5116"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5116">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/blog-grid-3-columns/"><span>3
                                                                        Columns</span></a>
                                                            </li>
                                                            <li id="menu-item-241"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/blog-grid-4-columns-full-width/"><span>4
                                                                        Columns : Full Width</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-629"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-629">
                                                        <a href="https://demo.casethemes.net/organio/blog-masonry/"><span>Blog
                                                                Masonry</span></a>
                                                    </li>
                                                    <li id="menu-item-137"
                                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-137">
                                                        <a
                                                            href="https://demo.casethemes.net/organio/we-advocate-swapping-screen-time-for-crafting/"><span>Blog
                                                                Details</span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-327"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-327">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/zechsal-magnesium-flakes-especially-made/"><span>Left
                                                                        Sidebar</span></a>
                                                            </li>
                                                            <li id="menu-item-326"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-326">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/best-guide-to-shopping-for-organic-ingredients/"><span>Full
                                                                        Width</span></a>
                                                            </li>
                                                            <li id="menu-item-328"
                                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-328">
                                                                <a
                                                                    href="https://demo.casethemes.net/organio/we-advocate-swapping-screen-time-for-crafting/"><span>Right
                                                                        Sidebar</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-4530"
                                                class="menu-item menu-item-type-custom menu-item-object-custom megamenu megamenu-style-alt menu-item-has-children menu-item-4530">
                                                <a href="#"><span>Elements</span></a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <div class="container">
                                                            <div data-elementor-type="wp-post" data-elementor-id="4527"
                                                                class="elementor elementor-4527"
                                                                data-elementor-settings="[]">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-751b8a0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                        data-id="751b8a0" data-element_type="section">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-extended ">
                                                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-716a780"
                                                                                data-id="716a780"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-5667426 elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="5667426"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/accordions-toggles/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-bars"></i>
                                                                                                            <span>Accordions
                                                                                                                &
                                                                                                                Toggles</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/blog-carousel/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-newspaper"></i>
                                                                                                            <span>Blog
                                                                                                                Carousel</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/blog-grid/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="far fa-newspaper"></i>
                                                                                                            <span>Blog
                                                                                                                Grid</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/buttons/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-cube"></i>
                                                                                                            <span>Buttons</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/clients/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-user-astronaut"></i>
                                                                                                            <span>Clients
                                                                                                                Carousel</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/contact-form-7/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fab fa-wpforms"></i>
                                                                                                            <span>Contact
                                                                                                                Form
                                                                                                                7</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0d136be"
                                                                                data-id="0d136be"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-38d728a elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="38d728a"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/countdown/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-sort-numeric-down-alt"></i>
                                                                                                            <span>Countdown</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/google-maps/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-map-marked-alt"></i>
                                                                                                            <span>Google
                                                                                                                Maps</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/icon-with-text/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-layer-group"></i>
                                                                                                            <span>Icon
                                                                                                                With
                                                                                                                Text</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/info-box/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-toolbox"></i>
                                                                                                            <span>Info
                                                                                                                Box</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/lists/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-list"></i>
                                                                                                            <span>Lists</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/message-box/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-info-circle"></i>
                                                                                                            <span>Message
                                                                                                                Box</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b641b3f"
                                                                                data-id="b641b3f"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-538f40a elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="538f40a"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/portfolio-carousel/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-band-aid"></i>
                                                                                                            <span>Portfolio
                                                                                                                Carousel</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/portfolio-grid/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-wallet"></i>
                                                                                                            <span>Portfolio
                                                                                                                Grid</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/product-carousel/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="flaticon flaticon-dairy-products"></i>
                                                                                                            <span>Product
                                                                                                                Carousel</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/product-grid/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-shopping-bag"></i>
                                                                                                            <span>Product
                                                                                                                Grid</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/services-carousel/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-cog"></i>
                                                                                                            <span>Services
                                                                                                                Carousel</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/services-grid/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-cogs"></i>
                                                                                                            <span>Services
                                                                                                                Grid</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a1a1b8b"
                                                                                data-id="a1a1b8b"
                                                                                data-element_type="column">
                                                                                <div
                                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-6a1344b elementor-widget elementor-widget-ct_menu_item"
                                                                                        data-id="6a1344b"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="ct_menu_item.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="ct-menu-item-wrap  style1">
                                                                                                <ul
                                                                                                    class="ct-menu-item ">
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/team-carousel/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-user-circle"></i>
                                                                                                            <span>Team
                                                                                                                Carousel</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/team-grid/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-users"></i>
                                                                                                            <span>Team
                                                                                                                Grid</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/testimonial-carousel/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-quote-left"></i>
                                                                                                            <span>Testimonial
                                                                                                                Carousel</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/testimonial-grid/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-quote-right"></i>
                                                                                                            <span>Testimonial
                                                                                                                Grid</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/video-buttons/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="far fa-play-circle"></i>
                                                                                                            <span>Video
                                                                                                                Buttons</span>
                                                                                                        </a></li>
                                                                                                    <li> <a
                                                                                                            href="https://demo.casethemes.net/organio/elements/counters/">
                                                                                                            <i aria-hidden="true"
                                                                                                                class="fas fa-sort-numeric-up"></i>
                                                                                                            <span>Counters</span>
                                                                                                        </a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="ct-header-meta">
                                    <div class="header-right-item h-btn-search"><i class="caseicon-search"></i></div>
                                </div>
                            </div>
                            <div class="ct-menu-overlay"></div>
                        </div>
                    </div>
                    <div id="ct-menu-mobile">
                        <div class="ct-mobile-meta-item btn-nav-cart"> <i class="caseicon-shopping-cart"></i></div>
                        <div class="ct-mobile-meta-item btn-nav-mobile open-menu"> <span></span></div>
                    </div>
                </div>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <div id="content" class="site-content">
            @yield('content')
        </div>
        <!--END PAGE CONTENT -->

        <footer id="colophon" class="site-footer-custom">
            <div class="footer-custom-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div data-elementor-type="wp-post" data-elementor-id="30" class="elementor elementor-30"
                                data-elementor-settings="[]">
                                <div class="elementor-section-wrap">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-8773834 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                        data-id="8773834" data-element_type="section"
                                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-extended ">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3648b42"
                                                data-id="3648b42" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-9fc7fb9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="9fc7fb9" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-extended ">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-270589d"
                                                                data-id="270589d" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-b064e56 elementor-widget elementor-widget-ct_mailchimp_form"
                                                                        data-id="b064e56" data-element_type="widget"
                                                                        data-widget_type="ct_mailchimp_form.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-mailchimp ct-mailchimp1 bg-image style2"
                                                                                style="background-image: url(https://demo.casethemes.net/organio/wp-content/uploads/2021/03/bg-mailchimp.jpg);">
                                                                                <div class="ct-mailchimp-inner">
                                                                                    <div
                                                                                        class="ct-mailchimp-image-left">
                                                                                        <img width="400" height="203"
                                                                                            src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/mailchimp-image1.png"
                                                                                            class="attachment-full"
                                                                                            alt="" />
                                                                                    </div>
                                                                                    <div class="ct-mailchimp-meta">
                                                                                        <h4 class="wg-title">
                                                                                            Subscribe to our Newsletter:
                                                                                        </h4>
                                                                                    </div>
                                                                                    <script>
                                                                                        (function() {
                                                                                            window.mc4wp = window.mc4wp || {
                                                                                                listeners: [],
                                                                                                forms: {
                                                                                                    on: function(evt, cb) {
                                                                                                        window.mc4wp.listeners.push({
                                                                                                            event: evt,
                                                                                                            callback: cb
                                                                                                        });
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        })();
                                                                                    </script>
                                                                                    <!-- Mailchimp for WordPress v4.8.7 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                                                    <form id="mc4wp-form-1"
                                                                                        class="mc4wp-form mc4wp-form-93"
                                                                                        method="post" data-id="93"
                                                                                        data-name="Form 1">
                                                                                        <div class="mc4wp-form-fields">
                                                                                            <div
                                                                                                class="field-group">
                                                                                                <div
                                                                                                    class="field-input">
                                                                                                    <input type="email"
                                                                                                        name="EMAIL"
                                                                                                        placeholder="Type your mail address..."
                                                                                                        required />
                                                                                                </div>
                                                                                                <div
                                                                                                    class="field-input">
                                                                                                    <input type="submit"
                                                                                                        value="Subscribe" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div><label
                                                                                            style="display: none !important;">Leave
                                                                                            this field empty if you're
                                                                                            human: <input type="text"
                                                                                                name="_mc4wp_honeypot"
                                                                                                value="" tabindex="-1"
                                                                                                autocomplete="off" /></label><input
                                                                                            type="hidden"
                                                                                            name="_mc4wp_timestamp"
                                                                                            value="1649171448" /><input
                                                                                            type="hidden"
                                                                                            name="_mc4wp_form_id"
                                                                                            value="93" /><input
                                                                                            type="hidden"
                                                                                            name="_mc4wp_form_element_id"
                                                                                            value="mc4wp-form-1" />
                                                                                        <div class="mc4wp-response">
                                                                                        </div>
                                                                                    </form>
                                                                                    <!-- / Mailchimp for WordPress Plugin -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-c07ea35 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="c07ea35" data-element_type="section">
                                                        <div
                                                            class="elementor-container elementor-column-gap-extended ">
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a943975"
                                                                data-id="a943975" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-5cbd990 elementor-widget elementor-widget-ct_image"
                                                                        data-id="5cbd990" data-element_type="widget"
                                                                        data-widget_type="ct_image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-image-single    "
                                                                                data-width="" data-height=""> <a
                                                                                    href="https://demo.casethemes.net/organio/">
                                                                                    <img width="377" height="171"
                                                                                        src="https://demo.casethemes.net/organio/wp-content/uploads/2021/03/logo-light.png"
                                                                                        class="no-lazyload attachment-full"
                                                                                        alt="" /> </a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-84243fb elementor-widget elementor-widget-ct_text_editor"
                                                                        data-id="84243fb" data-element_type="widget"
                                                                        data-widget_type="ct_text_editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_text_editor-84243fb"
                                                                                class="ct-text-editor "
                                                                                data-wow-delay="ms">
                                                                                <div class="ct-inline-css"
                                                                                    data-css=" "></div>
                                                                                <div
                                                                                    class="ct-text-editor elementor-clearfix">
                                                                                    We work with a passion of taking
                                                                                    challenges and creating new ones in
                                                                                    advertising sector.</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-4bd9b06 elementor-widget elementor-widget-ct_icon"
                                                                        data-id="4bd9b06" data-element_type="widget"
                                                                        data-widget_type="ct_icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-icon1 icon-align- style1">
                                                                                <a class="ct_icon-4bd9b06-0" href="#">
                                                                                    <i aria-hidden="true"
                                                                                        class="fab fa-facebook-f"></i>
                                                                                </a> <a class="ct_icon-4bd9b06-1"
                                                                                    href="#"> <i aria-hidden="true"
                                                                                        class="fab fa-twitter"></i>
                                                                                </a> <a class="ct_icon-4bd9b06-2"
                                                                                    href="#"> <i aria-hidden="true"
                                                                                        class="fab fa-dribbble"></i>
                                                                                </a> <a class="ct_icon-4bd9b06-3"
                                                                                    href="#"> <i aria-hidden="true"
                                                                                        class="fab fa-behance"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6e71bc5"
                                                                data-id="6e71bc5" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-848df36 elementor-widget elementor-widget-ct_heading"
                                                                        data-id="848df36" data-element_type="widget"
                                                                        data-widget_type="ct_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="ct-heading h-align- item-st-default">
                                                                                <h3 class="item--title case-animate-time st-default wow "
                                                                                    data-wow-delay="ms">
                                                                                    <span>Links</span>
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-75a4c29 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                        data-id="75a4c29" data-element_type="widget"
                                                                        data-widget_type="divider.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-divider"> <span
                                                                                    class="elementor-divider-separator">
                                                                                </span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-de5fd21 elementor-widget elementor-widget-ct_navigation_menu"
                                                                        data-id="de5fd21" data-element_type="widget"
                                                                        data-widget_type="ct_navigation_menu.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_navigation_menu-de5fd21"
                                                                                class="ct-navigation-menu1 style1">
                                                                                <div
                                                                                    class="menu-menu-footer-container">
                                                                                    <ul id="menu-menu-footer"
                                                                                        class="menu">
                                                                                        <li id="menu-item-60"
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14 current_page_item menu-item-60">
                                                                                            <a href="https://demo.casethemes.net/organio/"
                                                                                                aria-current="page"><span>Home</span></a>
                                                                                        </li>
                                                                                        <li id="menu-item-980"
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-980">
                                                                                            <a
                                                                                                href="https://demo.casethemes.net/organio/services/"><span>Services</span></a>
                                                                                        </li>
                                                                                        <li id="menu-item-62"
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62">
                                                                                            <a
                                                                                                href="https://demo.casethemes.net/organio/about/"><span>About
                                                                                                    us</span></a>
                                                                                        </li>
                                                                                        <li id="menu-item-979"
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-979">
                                                                                            <a
                                                                                                href="https://demo.casethemes.net/organio/testimonials/"><span>Testimonials</span></a>
                                                                                        </li>
                                                                                        <li id="menu-item-64"
                                                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64">
                                                                                            <a
                                                                                                href="https://demo.casethemes.net/organio/blog/"><span>News</span></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a204c0c"
                                                                data-id="a204c0c" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-70302fc elementor-widget elementor-widget-ct_heading"
                                                                        data-id="70302fc" data-element_type="widget"
                                                                        data-widget_type="ct_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="ct-heading h-align- item-st-default">
                                                                                <h3 class="item--title case-animate-time st-default wow "
                                                                                    data-wow-delay="ms"> <span>Official
                                                                                        info:</span></h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-a1544d2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                        data-id="a1544d2" data-element_type="widget"
                                                                        data-widget_type="divider.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-divider"> <span
                                                                                    class="elementor-divider-separator">
                                                                                </span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-7079037 elementor-widget elementor-widget-ct_contact_info"
                                                                        data-id="7079037" data-element_type="widget"
                                                                        data-widget_type="ct_contact_info.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-inline-css" data-css=" ">
                                                                            </div>
                                                                            <ul id="ct_contact_info-7079037"
                                                                                class="ct-contact-info ct-contact-info1 "
                                                                                data-wow-duration="1.2s">
                                                                                <li> <span class="ct-contact-icon"> <i
                                                                                            aria-hidden="true"
                                                                                            class="fas fa-map-marker-alt"></i>
                                                                                    </span> <span
                                                                                        class="ct-contact-content"> 30
                                                                                        Commercial Road<br /> Fratton,
                                                                                        Australia </span></li>
                                                                                <li> <span class="ct-contact-icon"> <i
                                                                                            aria-hidden="true"
                                                                                            class="fas fa-phone-alt"></i>
                                                                                    </span> <span
                                                                                        class="ct-contact-content">
                                                                                        1-888-452-1505 </span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-cdbceb6 elementor-widget elementor-widget-ct_heading"
                                                                        data-id="cdbceb6" data-element_type="widget"
                                                                        data-widget_type="ct_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="ct-heading h-align- item-st-default">
                                                                                <h6 class="item--title case-animate-time st-default wow "
                                                                                    data-wow-delay="ms"> <span>Open
                                                                                        Hours: </span></h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-f4c33bb elementor-widget elementor-widget-ct_text_editor"
                                                                        data-id="f4c33bb" data-element_type="widget"
                                                                        data-widget_type="ct_text_editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_text_editor-f4c33bb"
                                                                                class="ct-text-editor "
                                                                                data-wow-delay="ms">
                                                                                <div class="ct-inline-css"
                                                                                    data-css=" "></div>
                                                                                <div
                                                                                    class="ct-text-editor elementor-clearfix">
                                                                                    Mon &#8211; Sat: 8 am &#8211; 5
                                                                                    pm,<br />Sunday: CLOSED</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-b0653ed"
                                                                data-id="b0653ed" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-2ebeb56 elementor-widget elementor-widget-ct_heading"
                                                                        data-id="2ebeb56" data-element_type="widget"
                                                                        data-widget_type="ct_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="ct-heading h-align- item-st-default">
                                                                                <h3 class="item--title case-animate-time st-default wow "
                                                                                    data-wow-delay="ms">
                                                                                    <span>Instagram</span>
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-f23c909 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                                        data-id="f23c909" data-element_type="widget"
                                                                        data-widget_type="divider.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-divider"> <span
                                                                                    class="elementor-divider-separator">
                                                                                </span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2dba2eb elementor-widget elementor-widget-ct_text_editor"
                                                                        data-id="2dba2eb" data-element_type="widget"
                                                                        data-widget_type="ct_text_editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_text_editor-2dba2eb"
                                                                                class="ct-text-editor "
                                                                                data-wow-delay="ms">
                                                                                <div class="ct-inline-css"
                                                                                    data-css=" "></div>
                                                                                <div
                                                                                    class="ct-text-editor elementor-clearfix">
                                                                                    <div id="sb_instagram"
                                                                                        class="sbi sbi_mob_col_1 sbi_tab_col_2 sbi_col_3 sbi_width_resp"
                                                                                        style="padding-bottom: 8px;width: 100%"
                                                                                        data-feedid="*1" data-res="auto"
                                                                                        data-cols="3"
                                                                                        data-colsmobile="1"
                                                                                        data-colstablet="2" data-num="6"
                                                                                        data-nummobile=""
                                                                                        data-shortcode-atts="{}"
                                                                                        data-postid="30"
                                                                                        data-locatornonce="71ebf6e381"
                                                                                        data-sbi-flags="favorLocal">
                                                                                        <div id="sbi_images"
                                                                                            style="padding: 4px">
                                                                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition"
                                                                                                id="sbi_17959653754394103"
                                                                                                data-date="1615867629">
                                                                                                <div
                                                                                                    class="sbi_photo_wrap">
                                                                                                    <a class="sbi_photo"
                                                                                                        href="https://www.instagram.com/p/CMdzJsnJJDx/"
                                                                                                        target="_blank"
                                                                                                        rel="noopener nofollow"
                                                                                                        data-full-res="https://scontent-ort2-1.cdninstagram.com/v/t51.29350-15/160592051_437679624012421_2157246266541466556_n.jpg?_nc_cat=102&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=vwgydfnIStcAX-cKTg2&#038;_nc_ht=scontent-ort2-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT9iaF4PNTO_YpVnGCL8ngFBQxJnPR9FOdwTntiDo5p-dA&#038;oe=6224C195"
                                                                                                        data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160592051_437679624012421_2157246266541466556_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=vwgydfnIStcAX-cKTg2&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9iaF4PNTO_YpVnGCL8ngFBQxJnPR9FOdwTntiDo5p-dA&amp;oe=6224C195&quot;,&quot;150&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160592051_437679624012421_2157246266541466556_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=vwgydfnIStcAX-cKTg2&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9iaF4PNTO_YpVnGCL8ngFBQxJnPR9FOdwTntiDo5p-dA&amp;oe=6224C195&quot;,&quot;320&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160592051_437679624012421_2157246266541466556_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=vwgydfnIStcAX-cKTg2&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9iaF4PNTO_YpVnGCL8ngFBQxJnPR9FOdwTntiDo5p-dA&amp;oe=6224C195&quot;,&quot;640&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160592051_437679624012421_2157246266541466556_n.jpg?_nc_cat=102&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=vwgydfnIStcAX-cKTg2&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9iaF4PNTO_YpVnGCL8ngFBQxJnPR9FOdwTntiDo5p-dA&amp;oe=6224C195&quot;}">
                                                                                                        <span
                                                                                                            class="sbi-screenreader">Instagram
                                                                                                            post
                                                                                                            17959653754394103</span>
                                                                                                        <img src="https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/img/placeholder.png"
                                                                                                            alt="Instagram post 17959653754394103">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition"
                                                                                                id="sbi_17914510495620947"
                                                                                                data-date="1615867624">
                                                                                                <div
                                                                                                    class="sbi_photo_wrap">
                                                                                                    <a class="sbi_photo"
                                                                                                        href="https://www.instagram.com/p/CMdzJMkJS6K/"
                                                                                                        target="_blank"
                                                                                                        rel="noopener nofollow"
                                                                                                        data-full-res="https://scontent-ort2-1.cdninstagram.com/v/t51.29350-15/160790142_520098882312680_7190864355709334403_n.jpg?_nc_cat=108&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=UWrsTj1eOWAAX-pr8fv&#038;_nc_oc=AQnjlzqXgM3hrZcKqcrTBUUt8qUJlicWuvca__c51Pb0VhiaVBBUtPJCu9_gDmpEnn0&#038;_nc_ht=scontent-ort2-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT-cFOEPsf2CVPWWjiNjPXxX7cFGvBXE5k7C5qqoxsyq9g&#038;oe=62244FA8"
                                                                                                        data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160790142_520098882312680_7190864355709334403_n.jpg?_nc_cat=108&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=UWrsTj1eOWAAX-pr8fv&amp;_nc_oc=AQnjlzqXgM3hrZcKqcrTBUUt8qUJlicWuvca__c51Pb0VhiaVBBUtPJCu9_gDmpEnn0&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-cFOEPsf2CVPWWjiNjPXxX7cFGvBXE5k7C5qqoxsyq9g&amp;oe=62244FA8&quot;,&quot;150&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160790142_520098882312680_7190864355709334403_n.jpg?_nc_cat=108&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=UWrsTj1eOWAAX-pr8fv&amp;_nc_oc=AQnjlzqXgM3hrZcKqcrTBUUt8qUJlicWuvca__c51Pb0VhiaVBBUtPJCu9_gDmpEnn0&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-cFOEPsf2CVPWWjiNjPXxX7cFGvBXE5k7C5qqoxsyq9g&amp;oe=62244FA8&quot;,&quot;320&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160790142_520098882312680_7190864355709334403_n.jpg?_nc_cat=108&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=UWrsTj1eOWAAX-pr8fv&amp;_nc_oc=AQnjlzqXgM3hrZcKqcrTBUUt8qUJlicWuvca__c51Pb0VhiaVBBUtPJCu9_gDmpEnn0&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-cFOEPsf2CVPWWjiNjPXxX7cFGvBXE5k7C5qqoxsyq9g&amp;oe=62244FA8&quot;,&quot;640&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160790142_520098882312680_7190864355709334403_n.jpg?_nc_cat=108&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=UWrsTj1eOWAAX-pr8fv&amp;_nc_oc=AQnjlzqXgM3hrZcKqcrTBUUt8qUJlicWuvca__c51Pb0VhiaVBBUtPJCu9_gDmpEnn0&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-cFOEPsf2CVPWWjiNjPXxX7cFGvBXE5k7C5qqoxsyq9g&amp;oe=62244FA8&quot;}">
                                                                                                        <span
                                                                                                            class="sbi-screenreader">Instagram
                                                                                                            post
                                                                                                            17914510495620947</span>
                                                                                                        <img src="https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/img/placeholder.png"
                                                                                                            alt="Instagram post 17914510495620947">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition"
                                                                                                id="sbi_17888466862984838"
                                                                                                data-date="1615867619">
                                                                                                <div
                                                                                                    class="sbi_photo_wrap">
                                                                                                    <a class="sbi_photo"
                                                                                                        href="https://www.instagram.com/p/CMdzId9Jeqo/"
                                                                                                        target="_blank"
                                                                                                        rel="noopener nofollow"
                                                                                                        data-full-res="https://scontent-ort2-1.cdninstagram.com/v/t51.29350-15/161271827_191172625791711_1225591762254058110_n.jpg?_nc_cat=101&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=fGRIgfv4gcwAX87IIbX&#038;_nc_ht=scontent-ort2-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT9LqduLWzrPr0TILyeb15w0MrvxO7peqBnMyUFdwM0TdQ&#038;oe=62248416"
                                                                                                        data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161271827_191172625791711_1225591762254058110_n.jpg?_nc_cat=101&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=fGRIgfv4gcwAX87IIbX&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9LqduLWzrPr0TILyeb15w0MrvxO7peqBnMyUFdwM0TdQ&amp;oe=62248416&quot;,&quot;150&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161271827_191172625791711_1225591762254058110_n.jpg?_nc_cat=101&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=fGRIgfv4gcwAX87IIbX&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9LqduLWzrPr0TILyeb15w0MrvxO7peqBnMyUFdwM0TdQ&amp;oe=62248416&quot;,&quot;320&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161271827_191172625791711_1225591762254058110_n.jpg?_nc_cat=101&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=fGRIgfv4gcwAX87IIbX&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9LqduLWzrPr0TILyeb15w0MrvxO7peqBnMyUFdwM0TdQ&amp;oe=62248416&quot;,&quot;640&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161271827_191172625791711_1225591762254058110_n.jpg?_nc_cat=101&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=fGRIgfv4gcwAX87IIbX&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT9LqduLWzrPr0TILyeb15w0MrvxO7peqBnMyUFdwM0TdQ&amp;oe=62248416&quot;}">
                                                                                                        <span
                                                                                                            class="sbi-screenreader">Instagram
                                                                                                            post
                                                                                                            17888466862984838</span>
                                                                                                        <img src="https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/img/placeholder.png"
                                                                                                            alt="Instagram post 17888466862984838">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition"
                                                                                                id="sbi_17881435106157658"
                                                                                                data-date="1615867613">
                                                                                                <div
                                                                                                    class="sbi_photo_wrap">
                                                                                                    <a class="sbi_photo"
                                                                                                        href="https://www.instagram.com/p/CMdzHxip1XS/"
                                                                                                        target="_blank"
                                                                                                        rel="noopener nofollow"
                                                                                                        data-full-res="https://scontent-ort2-1.cdninstagram.com/v/t51.29350-15/160300357_262853852155134_4639421379710860544_n.jpg?_nc_cat=103&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=pwgIjX-SphQAX_ulL4n&#038;_nc_ht=scontent-ort2-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT-blH_IurhRlzk8tyjnwYWMl5lwrSNKzj2CdYiTdPNOXg&#038;oe=62260490"
                                                                                                        data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160300357_262853852155134_4639421379710860544_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=pwgIjX-SphQAX_ulL4n&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-blH_IurhRlzk8tyjnwYWMl5lwrSNKzj2CdYiTdPNOXg&amp;oe=62260490&quot;,&quot;150&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160300357_262853852155134_4639421379710860544_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=pwgIjX-SphQAX_ulL4n&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-blH_IurhRlzk8tyjnwYWMl5lwrSNKzj2CdYiTdPNOXg&amp;oe=62260490&quot;,&quot;320&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160300357_262853852155134_4639421379710860544_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=pwgIjX-SphQAX_ulL4n&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-blH_IurhRlzk8tyjnwYWMl5lwrSNKzj2CdYiTdPNOXg&amp;oe=62260490&quot;,&quot;640&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160300357_262853852155134_4639421379710860544_n.jpg?_nc_cat=103&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=pwgIjX-SphQAX_ulL4n&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-blH_IurhRlzk8tyjnwYWMl5lwrSNKzj2CdYiTdPNOXg&amp;oe=62260490&quot;}">
                                                                                                        <span
                                                                                                            class="sbi-screenreader">Instagram
                                                                                                            post
                                                                                                            17881435106157658</span>
                                                                                                        <img src="https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/img/placeholder.png"
                                                                                                            alt="Instagram post 17881435106157658">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition"
                                                                                                id="sbi_17864434907368785"
                                                                                                data-date="1615867607">
                                                                                                <div
                                                                                                    class="sbi_photo_wrap">
                                                                                                    <a class="sbi_photo"
                                                                                                        href="https://www.instagram.com/p/CMdzHFVp_cL/"
                                                                                                        target="_blank"
                                                                                                        rel="noopener nofollow"
                                                                                                        data-full-res="https://scontent-ort2-1.cdninstagram.com/v/t51.29350-15/160824220_272293631058951_25353289917148256_n.jpg?_nc_cat=106&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=W4CGTapGlKMAX8r0x-_&#038;_nc_ht=scontent-ort2-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT_Qm3LjY--ibIIXc5DKD80dMZTQxtOjxHahtGyQxIIlpg&#038;oe=62244308"
                                                                                                        data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160824220_272293631058951_25353289917148256_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=W4CGTapGlKMAX8r0x-_&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_Qm3LjY--ibIIXc5DKD80dMZTQxtOjxHahtGyQxIIlpg&amp;oe=62244308&quot;,&quot;150&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160824220_272293631058951_25353289917148256_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=W4CGTapGlKMAX8r0x-_&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_Qm3LjY--ibIIXc5DKD80dMZTQxtOjxHahtGyQxIIlpg&amp;oe=62244308&quot;,&quot;320&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160824220_272293631058951_25353289917148256_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=W4CGTapGlKMAX8r0x-_&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_Qm3LjY--ibIIXc5DKD80dMZTQxtOjxHahtGyQxIIlpg&amp;oe=62244308&quot;,&quot;640&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/160824220_272293631058951_25353289917148256_n.jpg?_nc_cat=106&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=W4CGTapGlKMAX8r0x-_&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_Qm3LjY--ibIIXc5DKD80dMZTQxtOjxHahtGyQxIIlpg&amp;oe=62244308&quot;}">
                                                                                                        <span
                                                                                                            class="sbi-screenreader">Instagram
                                                                                                            post
                                                                                                            17864434907368785</span>
                                                                                                        <img src="https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/img/placeholder.png"
                                                                                                            alt="Instagram post 17864434907368785">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="sbi_item sbi_type_image sbi_new sbi_transition"
                                                                                                id="sbi_17875951253287200"
                                                                                                data-date="1615867588">
                                                                                                <div
                                                                                                    class="sbi_photo_wrap">
                                                                                                    <a class="sbi_photo"
                                                                                                        href="https://www.instagram.com/p/CMdzEwjpqtC/"
                                                                                                        target="_blank"
                                                                                                        rel="noopener nofollow"
                                                                                                        data-full-res="https://scontent-ort2-1.cdninstagram.com/v/t51.29350-15/161432828_1556196047918593_925226802758570664_n.jpg?_nc_cat=109&#038;ccb=1-5&#038;_nc_sid=8ae9d6&#038;_nc_ohc=A1DCgTVCtlEAX9fRLGd&#038;_nc_ht=scontent-ort2-1.cdninstagram.com&#038;edm=ANo9K5cEAAAA&#038;oh=00_AT83VOOR-SiSxpeiobrcTLfyaf0Yr2-UM_ok5cESUCOi9g&#038;oe=6224E64F"
                                                                                                        data-img-src-set="{&quot;d&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161432828_1556196047918593_925226802758570664_n.jpg?_nc_cat=109&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=A1DCgTVCtlEAX9fRLGd&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT83VOOR-SiSxpeiobrcTLfyaf0Yr2-UM_ok5cESUCOi9g&amp;oe=6224E64F&quot;,&quot;150&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161432828_1556196047918593_925226802758570664_n.jpg?_nc_cat=109&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=A1DCgTVCtlEAX9fRLGd&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT83VOOR-SiSxpeiobrcTLfyaf0Yr2-UM_ok5cESUCOi9g&amp;oe=6224E64F&quot;,&quot;320&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161432828_1556196047918593_925226802758570664_n.jpg?_nc_cat=109&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=A1DCgTVCtlEAX9fRLGd&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT83VOOR-SiSxpeiobrcTLfyaf0Yr2-UM_ok5cESUCOi9g&amp;oe=6224E64F&quot;,&quot;640&quot;:&quot;https:\/\/scontent-ort2-1.cdninstagram.com\/v\/t51.29350-15\/161432828_1556196047918593_925226802758570664_n.jpg?_nc_cat=109&amp;ccb=1-5&amp;_nc_sid=8ae9d6&amp;_nc_ohc=A1DCgTVCtlEAX9fRLGd&amp;_nc_ht=scontent-ort2-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT83VOOR-SiSxpeiobrcTLfyaf0Yr2-UM_ok5cESUCOi9g&amp;oe=6224E64F&quot;}">
                                                                                                        <span
                                                                                                            class="sbi-screenreader">Instagram
                                                                                                            post
                                                                                                            17875951253287200</span>
                                                                                                        <img src="https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/img/placeholder.png"
                                                                                                            alt="Instagram post 17875951253287200">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="sbi_load"></div> <span
                                                                                            class="sbi_resized_image_data"
                                                                                            data-feed-id="*1"
                                                                                            data-resized="{&quot;17959653754394103&quot;:{&quot;id&quot;:&quot;160592051_437679624012421_2157246266541466556_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17914510495620947&quot;:{&quot;id&quot;:&quot;160790142_520098882312680_7190864355709334403_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17888466862984838&quot;:{&quot;id&quot;:&quot;161271827_191172625791711_1225591762254058110_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17881435106157658&quot;:{&quot;id&quot;:&quot;160300357_262853852155134_4639421379710860544_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17864434907368785&quot;:{&quot;id&quot;:&quot;160824220_272293631058951_25353289917148256_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}},&quot;17875951253287200&quot;:{&quot;id&quot;:&quot;161432828_1556196047918593_925226802758570664_n&quot;,&quot;ratio&quot;:&quot;1.00&quot;,&quot;sizes&quot;:{&quot;full&quot;:640,&quot;low&quot;:320,&quot;thumb&quot;:150}}}">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-c05d2ff elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                        data-id="c05d2ff" data-element_type="section"
                                                        id="ct-footer-bottom"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-no ">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f91260e"
                                                                data-id="f91260e" data-element_type="column">
                                                                <div
                                                                    class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-61622b0 elementor-widget elementor-widget-ct_text_editor"
                                                                        data-id="61622b0" data-element_type="widget"
                                                                        id="ct-copyright"
                                                                        data-widget_type="ct_text_editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_text_editor-61622b0"
                                                                                class="ct-text-editor "
                                                                                ata-wow-delay="ms">
                                                                                <div class="ct-inline-css"
                                                                                    data-css=""></div>
                                                                                <div
                                                                                    class="ct-text-editor elementor-clearfix">
                                                                                    © <span
                                                                                        class="ct-year">2021</span>
                                                                                    Organio &#8211; <a
                                                                                        href="https://themeforest.net/user/case-themes/portfolio"
                                                                                        target="_blank"
                                                                                        rel="nofollow noopener">CaseThemes</a>.
                                                                                    All rights reserved.</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <span class="ct-footer-year">2022</span>
        </footer> <a href="#" class="scroll-top"><i class="caseicon-long-arrow-right-three"></i></a>
    </div><!-- #page -->
    <div class="ct-modal ct-modal-search">
        <div class="ct-modal-close"><i class="ct-icon-close"></i></div>
        <div class="ct-modal-overlay"></div>
        <div class="ct-modal-content">
            <form role="search" method="get" class="search-form-popup" action="https://demo.casethemes.net/organio/">
                <div class="searchform-wrap"> <input type="text" placeholder="Enter Keywords..." id="search" name="s"
                        class="search-field" /> <button type="submit" class="search-submit"><i
                            class="caseicon-search"></i></button></div>
            </form>
        </div>
    </div>
    <div class="ct-widget-cart-wrap">
        <div class="ct-widget-cart-overlay"></div>
        <div class="ct-widget-cart-sidebar">
            <div class="ct-close"><i class="ct-icon-close"></i></div>
            <div class="widget_shopping_cart">
                <div class="widget_shopping_head">
                    <div class="widget_shopping_title"> Cart</div>
                </div>
                <div class="widget_shopping_cart_content">
                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="ct-modal ct-user-popup">
        <div class="ct-modal-close"><i class="ct-icon-close"></i></div>
        <div class="ct-modal-content">
            <div class="ct-user ct-user-register u-close">
                <div class="ct-user-content">
                    <h3 class="ct-user-heading">Create your account</h3>
                    <div class="ct-user-form">
                        <div class="ct-user-form-body ct-user-form-register">
                            <div class="register-form">
                                <div class="fields-content">
                                    <div class="field-group"> <input id="res_user" type="text"
                                            class="input" placeholder="Username"
                                            data-validate="Required Field"
                                            data-user-length="Username too short. At least 4 characters is required."
                                            data-special-char="The value of text field can&#039;t contain any of the following characters: \ / : * ? &quot; &lt; &gt; space">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="field-group"> <input id="res_email" type="text"
                                            class="input" placeholder="Email Address"
                                            data-validate="Required Field"
                                            data-email-format="The Email address is incorrect!"> <i
                                            class="zmdi zmdi-email"></i></div>
                                    <div class="field-group"> <input id="res_pass1" type="password"
                                            class="input" data-type="password" placeholder="Password"
                                            data-validate="Required Field"
                                            data-pass-length="Password length must be greater than 5."> <i
                                            class="zmdi zmdi-lock"></i></div>
                                    <div class="field-group"> <input id="res_pass2" type="password"
                                            class="input" data-type="password" placeholder="Confirm Password"
                                            data-validate="Required Field"
                                            data-pass-confirm="Your password and confirmation password do not match.">
                                        <i class="zmdi zmdi-lock"></i>
                                    </div>
                                    <div class="field-group"> <button type="button"
                                            class="button btn-up-register">Create Account</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ct-user-footer"> <a href="javascript:void(0)" class="btn-sign-in"> Sign In</a>
                    </div>
                </div>
            </div>
            <div class="ct-user ct-user-login">
                <div class="ct-user-content">
                    <h3 class="ct-user-heading">Log in to Your Account</h3>
                    <div class="ct-user-form">
                        <div class="ct-user-form-body ct-user-form-login">
                            <div class="login-form">
                                <div class="fields-content">
                                    <div class="field-group"> <input id="user" type="text" class="input user_name"
                                            placeholder="Username" data-validate="Required Field"> <i
                                            class="zmdi zmdi-account"></i></div>
                                    <div class="field-group"> <input id="pass" type="password"
                                            class="input password" placeholder="Password"
                                            data-validate="Required Field"> <i class="zmdi zmdi-lock"></i></div>
                                    <div class="field-group field-footer-group"> <button type="button"
                                            class="button button-login">Log In</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ct-user-footer"> <a href="javascript:void(0)" class="btn-sign-up"> Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }
            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields) {
                for (var j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField);
                }
            }
        })();
    </script><!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://demo.casethemes.net/organio/wp-admin/admin-ajax.php";
    </script>
    <div class="woosc-popup woosc-search">
        <div class="woosc-popup-inner">
            <div class="woosc-popup-content">
                <div class="woosc-popup-content-inner">
                    <div class="woosc-popup-close"></div>
                    <div class="woosc-search-input"> <input type="search" id="woosc_search_input"
                            placeholder="Type any keyword to search..." /></div>
                    <div class="woosc-search-result"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="woosc-popup woosc-settings">
        <div class="woosc-popup-inner">
            <div class="woosc-popup-content">
                <div class="woosc-popup-content-inner">
                    <div class="woosc-popup-close"></div> Select the fields to be shown. Others will be hidden. Drag
                    and drop to rearrange the order.<ul class="woosc-settings-fields">
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="image" checked /><span class="label">Image</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="sku" checked /><span class="label">SKU</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="rating" checked /><span class="label">Rating</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="price" checked /><span class="label">Price</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="stock" checked /><span class="label">Stock</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="availability" checked /><span class="label">Availability</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="add_to_cart" checked /><span class="label">Add to cart</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="description" checked /><span class="label">Description</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="content" checked /><span class="label">Content</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="weight" checked /><span class="label">Weight</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="dimensions" checked /><span class="label">Dimensions</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="additional" checked /><span class="label">Additional
                                information</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="attributes" checked /><span class="label">Attributes</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="custom_attributes" checked /><span class="label">Custom
                                attributes</span></li>
                        <li class="woosc-settings-field-li"><input type="checkbox" class="woosc-settings-field"
                                value="custom_fields" checked /><span class="label">Custom fields</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="woosc-area"
        class="woosc-area woosc-bar-bottom woosc-bar-right woosc-bar-click-outside-yes woosc-hide-checkout"
        data-bg-color="#292a30" data-btn-color="#00a0d2">
        <div class="woosc-inner">
            <div class="woosc-table">
                <div class="woosc-table-inner"> <a href="javascript:void(0);" id="woosc-table-close"
                        class="woosc-table-close hint--left" aria-label="Close"><span
                            class="woosc-table-close-icon"></span></a>
                    <div class="woosc-table-items"></div>
                </div>
            </div>
            <div class="woosc-bar ">
                <div class="woosc-bar-notice"> Click outside to hide the compare bar</div> <a
                    href="javascript:void(0);" class="woosc-bar-settings hint--top" aria-label="Select fields"></a> <a
                    href="javascript:void(0);" class="woosc-bar-search hint--top" aria-label="Add product"></a>
                <div class="woosc-bar-items"></div>
                <div class="woosc-bar-btn woosc-bar-btn-text">
                    <div class="woosc-bar-btn-icon-wrapper">
                        <div class="woosc-bar-btn-icon-inner"><span></span><span></span><span></span></div>
                    </div> Compare
                </div>
            </div>
        </div>
    </div>
    <div id="woosw-area" class="woosw-area">
        <div class="woosw-inner">
            <div class="woosw-content">
                <div class="woosw-content-top"> Wishlist <span class="woosw-count">0</span> <span
                        class="woosw-close"></span></div>
                <div class="woosw-content-mid"></div>
                <div class="woosw-content-bot">
                    <div class="woosw-content-bot-inner"> <a class="woosw-page"
                            href="https://demo.casethemes.net/organio/wishlist/"> Open wishlist page </a> <span
                            class="woosw-continue" data-url=""> Continue shopping </span></div>
                    <div class="woosw-notice"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(function($) {
            if (typeof wc_add_to_cart_params === 'undefined')
                return false;
            $(document.body).on('added_to_cart', function(event, fragments, cart_hash, $button) {
                var $pid = $button.data('product_id');
                $.ajax({
                    type: 'POST',
                    url: wc_add_to_cart_params.ajax_url,
                    data: {
                        'action': 'item_added',
                        'id': $pid
                    },
                    success: function(response) {
                        $('.ct-widget-cart-wrap').addClass('open');
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err +=
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err +=
                    "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                var slider = document.getElementById(sliderID);
                slider.innerHTML = err;
                slider.style.display = "block";
            }
        }
    </script>
    <link rel='stylesheet' id='elementor-post-2655-css'
        href='https://demo.casethemes.net/organio/wp-content/uploads/elementor/css/post-2655.css?ver=1648277083'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-5090-css'
        href='https://demo.casethemes.net/organio/wp-content/uploads/elementor/css/post-5090.css?ver=1648277083'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-4527-css'
        href='https://demo.casethemes.net/organio/wp-content/uploads/elementor/css/post-4527.css?ver=1648277083'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-30-css'
        href='https://demo.casethemes.net/organio/wp-content/uploads/elementor/css/post-30.css?ver=1648277085'
        type='text/css' media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.5.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-user/acess/js/notify.min.js?ver=1.0.0'
        id='notify-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-user/acess/js/remodal.min.js?ver=1.0.0'
        id='remodal-js'></script>
    <script type='text/javascript' id='ct-user-form-js-extra'>
        /* <![CDATA[ */
        var userpress = {
            "ajax": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php",
            "nonce": "553a4ef6e2"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/ct-user-form.min.js?ver=1.0.0'
        id='ct-user-form-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9'
        id='regenerator-runtime-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
        id='wp-polyfill-js'></script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.casethemes.net\/organio\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/contact-form-7.min.js?ver=5.5.6'
        id='contact-form-7-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.6.2.1'
        id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/organio\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=6.2.1'
        id='wc-add-to-cart-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.6.2.1'
        id='js-cookie-js'></script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/organio\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=6.2.1'
        id='woocommerce-js'></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "\/organio\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_eb1003da9fd54b3be8b8083d4f8b5944",
            "fragment_name": "wc_fragments_eb1003da9fd54b3be8b8083d4f8b5944",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=6.2.1'
        id='wc-cart-fragments-js'></script>
    <script type='text/javascript' id='ppress-frontend-script-js-extra'>
        /* <![CDATA[ */
        var pp_ajax_form = {
            "ajaxurl": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php",
            "confirm_delete": "Are you sure?",
            "deleting_text": "Deleting...",
            "deleting_error": "An error occurred. Please try again.",
            "nonce": "acb83a6d01",
            "disable_ajax_form": "false"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/wp-user-avatar/assets/js/frontend.min.js?ver=3.2.8'
        id='ppress-frontend-script-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/table-head-fixer.min.js?ver=4.2.6'
        id='table-head-fixer-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?ver=4.2.6'
        id='perfect-scrollbar-js'></script>
    <script type='text/javascript' src='https://demo.casethemes.net/organio/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1'
        id='jquery-ui-core-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.1' id='jquery-ui-mouse-js'>
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-includes/js/jquery/ui/sortable.min.js?ver=1.13.1'
        id='jquery-ui-sortable-js'></script>
    <script type='text/javascript' id='woosc-frontend-js-extra'>
        /* <![CDATA[ */
        var woosc_vars = {
            "ajaxurl": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php",
            "user_id": "0cdb64fab32a05bd393b20c8c351de9f",
            "page_url": "#",
            "open_button": "",
            "open_button_action": "open_popup",
            "menu_action": "open_popup",
            "open_table": "yes",
            "open_bar": "no",
            "bar_bubble": "no",
            "click_again": "no",
            "hide_empty": "no",
            "click_outside": "yes",
            "freeze_column": "yes",
            "freeze_row": "yes",
            "scrollbar": "yes",
            "limit": "100",
            "button_text_change": "yes",
            "remove_all": "Do you want to remove all products from the compare?",
            "limit_notice": "You can add a maximum of {limit} products to the compare table.",
            "button_text": "Compare",
            "button_text_added": "Compare",
            "nonce": "434c194670"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/woosc-frontend.min.js?ver=4.2.6'
        id='woosc-frontend-js'></script>
    <script type='text/javascript' src='https://demo.casethemes.net/organio/wp-includes/js/underscore.min.js?ver=1.13.1'
        id='underscore-js'></script>
    <script type='text/javascript' id='wp-util-js-extra'>
        /* <![CDATA[ */
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/organio\/wp-admin\/admin-ajax.php"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://demo.casethemes.net/organio/wp-includes/js/wp-util.min.js?ver=5.9.2'
        id='wp-util-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_variation_params = {
            "wc_ajax_url": "\/organio\/?wc-ajax=%%endpoint%%",
            "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
            "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=6.2.1'
        id='wc-add-to-cart-variation-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.js?ver=2.8.4'
        id='slick-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min.js?ver=2.8.4'
        id='magnific-popup-js'></script>
    <script type='text/javascript' id='woosq-frontend-js-extra'>
        /* <![CDATA[ */
        var woosq_vars = {
            "ajax_url": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php",
            "effect": "mfp-3d-unfold",
            "scrollbar": "yes",
            "hashchange": "no",
            "cart_redirect": "no",
            "cart_url": "https:\/\/demo.casethemes.net\/organio\/cart\/",
            "close": "Close (Esc)",
            "next": "Next (Right arrow key)",
            "prev": "Previous (Left arrow key)",
            "is_rtl": ""
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/woosq-frontend.min.js?ver=2.8.4'
        id='woosq-frontend-js'></script>
    <script type='text/javascript' id='woosw-frontend-js-extra'>
        /* <![CDATA[ */
        var woosw_vars = {
            "ajax_url": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php",
            "menu_action": "open_popup",
            "perfect_scrollbar": "yes",
            "wishlist_url": "https:\/\/demo.casethemes.net\/organio\/wishlist\/",
            "button_action": "list",
            "button_action_added": "popup",
            "empty_confirm": "Are you sure? This cannot be undone.",
            "copied_text": "Copied the wishlist link:",
            "menu_text": "Wishlist",
            "button_text": "Add to wishlist",
            "button_text_added": "Browse wishlist"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/woosw-frontend.min.js?ver=2.9.6'
        id='woosw-frontend-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/js/bootstrap.min.js?ver=4.0.0'
        id='bootstrap-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/js/nice-select.min.js?ver=all'
        id='nice-select-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/match-height.min.js?ver=1.0.0'
        id='match-height-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/js/progressbar.min.js?ver=1.0.0'
        id='progressbar-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/assets/js/wow.min.js?ver=1.0.0' id='wow-js'>
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/organio-main.min.js?ver=1.5.0'
        id='organio-main-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/uploads/siteground-optimizer-assets/organio-woocommerce.min.js?ver=1.5.0'
        id='organio-woocommerce-js'></script>
    <script type='text/javascript' id='woo-variation-swatches-js-extra'>
        /* <![CDATA[ */
        var woo_variation_swatches_options = {
            "is_product_page": "",
            "show_variation_label": "1",
            "variation_label_separator": ":",
            "wvs_nonce": "2f25f4487a"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=1.1.19'
        id='woo-variation-swatches-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/case-theme-core/assets/js/lib/slick.min.js?ver=1.8.1'
        id='jquery-slick-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-post-carousel-widget.js?ver=1.5.0'
        id='ct-post-carousel-widget-js-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1'
        id='jquery-numerator-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-counter-widget.js?ver=1.5.0'
        id='ct-counter-widget-js-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-countdown.js?ver=1.5.0'
        id='ct-countdown-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-parallax-lib.js?ver=all'
        id='ct-parallax-lib-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-parallax.js?ver=all'
        id='ct-parallax-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/themes/orgio/elementor/js/ct-progressbar-widget.js?ver=1.5.0'
        id='ct-progressbar-widget-js-js'></script>
    <script type='text/javascript' id='sbi_scripts-js-extra'>
        /* <![CDATA[ */
        var sb_instagram_js_options = {
            "font_method": "svg",
            "resized_url": "https:\/\/demo.casethemes.net\/organio\/wp-content\/uploads\/sb-instagram-feed-images\/",
            "placeholder": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/instagram-feed\/img\/placeholder.png",
            "ajax_url": "https:\/\/demo.casethemes.net\/organio\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/instagram-feed/js/sbi-scripts.min.js?ver=6.0.4'
        id='sbi_scripts-js'></script>
    <script type='text/javascript' defer
        src='https://demo.casethemes.net/organio/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.8.7'
        id='mc4wp-forms-api-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.5.6'
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.5.6'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6'
        id='swiper-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.5.6'
        id='share-link-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0'
        id='elementor-dialog-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.5.6",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "a11y_improvements": true,
                "e_import_export": true,
                "e_hidden_wordpress_widgets": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "favorite-widgets": true,
                "admin-top-bar": true
            },
            "urls": {
                "assets": "https:\/\/demo.casethemes.net\/organio\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 30,
                "title": "Organio%20%E2%80%93%20Organic%20%26%20Food%20Store%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.5.6'
        id='elementor-frontend-js'></script>
    <script type='text/javascript'
        src='https://demo.casethemes.net/organio/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.5.6'
        id='preloaded-modules-js'></script>
</body>

</html>
