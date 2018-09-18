<!DOCTYPE html>
<html>

<head>

    <title>
        Hot Questions - Stack Exchange
    </title>
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/codegolf/img/favicon.ico?v=38413b30209a">
    <link rel="apple-touch-icon image_src" href="https://cdn.sstatic.net/Sites/codegolf/img/apple-touch-icon.png?v=6f55f0b2476f">
    <link rel="search" type="application/opensearchdescription+xml" title="Programming Puzzles &amp; Code Golf Stack Exchange" href="/opensearch.xml">
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@StackCodeGolf" />
    <meta name="twitter:domain" content="codegolf.stackexchange.com" />
    <meta name="description" content="Q&amp;A for programming puzzle enthusiasts and code golfers" />

    <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/codegolf/img/apple-touch-icon@2.png?v=ee86e2cfbac3" />
    <meta name="twitter:title" property="og:title" itemprop="title name" content="Programming Puzzles &amp; Code Golf Stack Exchange" />
    <meta name="twitter:description" property="og:description" itemprop="description" content="Q&amp;A for programming puzzle enthusiasts and code golfers" />
    <meta property="og:url" content="https://codegolf.stackexchange.com/" />



    <script src="<?php echo base_url()?>public/js/pc/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/js/pc/stub.en.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/pc/all.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/pc/me.css" type="text/css" />

    <link rel="alternate" type="application/atom+xml" title="Feed of recent questions" href="/feeds">

    </script>

    <noscript id="noscript-css">
        <style type="text/css">
            body,
            .so-header {
                margin-top: 1.9em
            }
        </style>
    </noscript>
</head>


<body class="home-page new-topbar">

    <div id="notify-container"></div>
    <div id="custom-header"></div>


    <?php $this->load->view("base/pc/topbar.php"); ?> 

    <script>
        StackExchange.ready(function() {
            StackExchange.topbar.init();
        });
    </script>

    <div class="container">
        
        <!-- HEADER -->
        <?php $this->load->view("base/pc/header.php"); ?> 
        <!--- END HEADER  -->

        <!-- *********************************** -->
        <div id="content" class="snippet-hidden">

        </div>
    </div>

   <?php $this->load->view("base/pc/footer.php"); ?> 

    <noscript>
        <div id="noscript-warning">Programming Puzzles &amp; Code Golf Stack Exchange works best with JavaScript enabled
            <img src="https://pixel.quantserve.com/pixel/p-c1rF4kxgLUzNc.gif" alt="" class="dno">
        </div>
    </noscript>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-5620270-24', {
            'cookieDomain': 'stackexchange.com',
            userId: '4963754'
        });
        ga('set', 'dimension1', '4963754');
        ga('send', 'pageview');
        var _qevents = _qevents || [],
            _comscore = _comscore || [];
        (function() {
            var ssl = 'https:' == document.location.protocol,
                s = document.getElementsByTagName('script')[0],
                qc = document.createElement('script');
            qc.async = true;
            qc.src = (ssl ? 'https://secure' : 'http://edge') + '.quantserve.com/quant.js';
            s.parentNode.insertBefore(qc, s);
            _qevents.push({
                qacct: "p-c1rF4kxgLUzNc"
            });
            var sc = document.createElement('script');
            sc.async = true;
            sc.src = (ssl ? 'https://sb' : 'http://b') + '.scorecardresearch.com/beacon.js';
            s.parentNode.insertBefore(sc, s);
            _comscore.push({
                c1: "2",
                c2: "17440561"
            });
        })();
    </script>


    <script type="text/javascript">
        (function(appendChild) {
            Node.prototype.appendChild = function() {
                var parent = this;
                var newNode = arguments[0];
                if (parent.nodeName === 'HEAD' && newNode && newNode.nodeName === 'SCRIPT' && newNode.src) {

                    window.setTimeout(function() {
                        var result = newNode.src.match(/^https:\/\/maps\.googleapis\.com\/maps\/api\/place\/js\/(\w+)Service\./i) || [];
                        var service = result[1];
                        if (service) {
                            if (service === 'Autocompletion') service = 2;
                            else if (service === 'Place') service = 1;
                            else service = 0;
                            StackExchange.using('gps', function() {
                                StackExchange.gps.track('google_maps_places_api.call', {
                                    service: service
                                });
                            });
                        }
                    }, 0);
                }
                return appendChild.apply(this, arguments);
            };
        })(Node.prototype.appendChild);
    </script>
</body>

</html>