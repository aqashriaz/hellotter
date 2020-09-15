  <html>

<head>     
    <base href="https://web-cdn.jitsi.net/meetjitsi_4264.912/" />
    <link rel="apple-touch-icon" href="https://hellotter.gyzw.cc/public/images/Hellotter-logo-cyan.png">
    <link rel="stylesheet" href="css/all.css?v=4203.857">
    <script>
        
        if (window.navigator.userAgent.match(/(MSIE|Trident)/)) {
            var roomName = encodeURIComponent(window.location.pathname);
            window.location.href = "static/recommendedBrowsers.html" + "?room=" + roomName;
        }

        window.indexLoadedTime = window.performance.now();
        console.log("(TIME) index.html loaded:\t", indexLoadedTime);
        
        var criticalFiles = [
            "config.js",
            "utils.js",
            "do_external_connect.js",
            "interface_config.js",
            "logging_config.js",
            "lib-jitsi-meet.min.js",
            "app.bundle.min.js",
            "all.css?v=4203.857"
        ];
        var loadErrHandler = function(e) {
            var target = e.target;

            var fileRef = (target.src ? target.src : target.href);
            if (("SCRIPT" === target.tagName || "LINK" === target.tagName)
                && criticalFiles.some(
                    function(file) { return fileRef.indexOf(file) !== -1 })) {
                window.onload = function() {
                    
                    var href = window.location.href;

                    var retryMatch = href.match(/.+(\?|&)rCounter=(\d+)/);
                    var retryCountStr = retryMatch ? retryMatch[2] : "0";
                    var retryCount = Number.parseInt(retryCountStr);

                    if (retryMatch == null) {
                        var separator = href.indexOf("?") === -1 ? "?" : "&";
                        var hashIdx = href.indexOf("#");

                        if (hashIdx === -1) {
                            href += separator + "rCounter=1";
                        } else {
                            var hashPart = href.substr(hashIdx);

                            href = href.substr(0, hashIdx)
                                + separator + "rCounter=1" + hashPart;
                        }
                    } else {
                        var separator = retryMatch[1];

                        href = href.replace(
                            /(\?|&)rCounter=(\d+)/,
                            separator + "rCounter=" + (retryCount + 1));
                    }

                    var delay = Math.pow(2, retryCount) * 2000;
                    if (isNaN(delay) || delay < 2000 || delay > 60000)
                        delay = 10000;

                    var showMoreText = "show more";
                    var showLessText = "show less";

                    document.body.innerHTML
                        = "<div style='"
                        + "position: absolute;top: 50%;left: 50%;"
                        + "text-align: center;"
                        + "font-size: medium;"
                        + "font-weight: 400;"
                        + "transform: translate(-50%, -50%)'>"
                        + "Uh oh! We couldn't fully download everything we needed :("
                        + "<br/> "
                        + "We will try again shortly. In the mean time, check for problems with your Internet connection!"
                        + "<br/><br/> "
                        + "<div id='moreInfo' style='"
                        + "display: none;'>" + "Missing " + fileRef
                        + "<br/><br/></div>"
                        + "<a id='showMore' style='"
                        + "text-decoration: underline;"
                        + "font-size:small;"
                        + "cursor: pointer'>" + showMoreText + "</a>"
                        + "&nbsp;&nbsp;&nbsp;"
                        + "<a id ='reloadLink' style='"
                        + "text-decoration: underline;"
                        + "font-size:small;"
                        + "'>reload now</a>"
                        + "</div>";

                    var reloadLink = document.getElementById('reloadLink');
                    reloadLink.setAttribute('href', href);

                    var showMoreElem = document.getElementById("showMore");
                    showMoreElem.addEventListener('click', function () {
                            var moreInfoElem
                                    = document.getElementById("moreInfo");

                            if (showMoreElem.innerHTML === showMoreText) {
                                moreInfoElem.setAttribute(
                                    "style",
                                    "display: block;"
                                    + "color:#FF991F;"
                                    + "font-size:small;"
                                    + "user-select:text;");
                                showMoreElem.innerHTML = showLessText;
                            }
                            else {
                                moreInfoElem.setAttribute(
                                    "style", "display: none;");
                                showMoreElem.innerHTML = showMoreText;
                            }
                        });

                    window.setTimeout(
                        function () { window.location.replace(href); }, delay);

                     if (typeof postLoadErrorHandler === "function") {
                        postLoadErrorHandler(fileRef);
                    }
                };
                window.removeEventListener(
                    'error', loadErrHandler, true );
            }
        };
        window.addEventListener(
            'error', loadErrHandler, true );
    </script>
    <script>var subdomain = "";
if (subdomain) {
    subdomain = subdomain.substr(0,subdomain.length-1).split('.').join('_').toLowerCase() + '.';
}
var config = {
    hosts: {
        domain: 'meet.jit.si',

        muc: 'conference.'+subdomain+'meet.jit.si', 
        focus: 'focus.meet.jit.si',
    },
    disableSimulcast: false,
    enableRemb: true,
    enableTcc: true,
    resolution: 360,
    constraints: {
        video: {
            height: {
                ideal: 720,
                max: 720,
                min: 180
            },
            width: {
                ideal: 1280,
                max: 1280,
                min: 320
            }
        }
    },
    enableInsecureRoomNameWarning: true,
    externalConnectUrl: '//meet.jit.si/http-pre-bind',
analytics: {
            amplitudeAPPKey: "fafdba4c3b47fe5f151060ca37f02d2f",
                        whiteListedEvents: [ 'conference.joined', 'page.reload.scheduled', 'rejoined', 'transport.stats' ],
    },
    enableP2P: true, 
    p2p: {
        enabled: true,
        preferH264: true,
        disableH264: true,
        useStunTurn: true 
    },
    useStunTurn: true, 
    useTurnUdp: false,
    bosh: '//meet.jit.si/http-bind', 
    websocket: 'wss://meet.jit.si/xmpp-websocket', // FIXME: use xep-0156 for that


    clientNode: 'http://jitsi.org/jitsimeet', // The name of client node advertised in XEP-0115 'c' stanza
    //deprecated desktop sharing settings, included only because older version of jitsi-meet require them
    desktopSharing: 'ext', // Desktop sharing method. Can be set to 'ext', 'webrtc' or false to disable.
    chromeExtensionId: 'kglhbbefdnlheedjiejgomgmfplipfeb', // Id of desktop streamer Chrome extension
    desktopSharingSources: ['screen', 'window'],
    googleApiApplicationClientID: "39065779381-bbhnkrgibtf4p0j9ne5vsq7bm49t1tlf.apps.googleusercontent.com",
    microsoftApiApplicationClientID: "00000000-0000-0000-0000-000040240063",
    enableCalendarIntegration: true,
    //new desktop sharing settings
    desktopSharingChromeExtId: 'kglhbbefdnlheedjiejgomgmfplipfeb', // Id of desktop streamer Chrome extension
    desktopSharingChromeDisabled: false,
    desktopSharingChromeSources: ['screen', 'window', 'tab'],
    desktopSharingChromeMinExtVersion: '0.2.6.2', // Required version of Chrome extension
    desktopSharingFirefoxDisabled: false,
    useRoomAsSharedDocumentName: false,
    enableLipSync: false,
    disableRtx: false, // Enables RTX everywhere
    enableScreenshotCapture: false,
    openBridgeChannel: 'websocket', // One of true, 'datachannel', or 'websocket'
    channelLastN: 20, // The default value of the channel attribute last-n.
    startBitrate: "800",
    disableAudioLevels: false,
    disableSuspendVideo: true,
    stereo: false,
    forceJVB121Ratio:  -1,
    enableTalkWhileMuted: true,

    enableNoAudioDetection: true,

    enableNoisyMicDetection: true,

    enableClosePage: false,

    disableLocalVideoFlip: true,

    hiddenDomain: 'recorder.meet.jit.si',
    dropbox: {
        appKey: 'cc6zkkt6jff016i'
    },
    transcribingEnabled: false,
    enableRecording: true,
    liveStreamingEnabled: true,
    fileRecordingsEnabled: true,
    fileRecordingsServiceEnabled: false,
    fileRecordingsServiceSharingEnabled: false,
    requireDisplayName: false,
    enableWelcomePage: true,
    isBrand: false,
    dialInNumbersUrl: 'https://api.jitsi.net/phoneNumberList',
    dialInConfCodeUrl:  'https://api.jitsi.net/conferenceMapper',

    dialOutCodesUrl:  'https://api.jitsi.net/countrycodes',
    dialOutAuthUrl: 'https://api.jitsi.net/authorizephone',
    peopleSearchUrl: 'https://api.jitsi.net/directorySearch',
    inviteServiceUrl: 'https://api.jitsi.net/conferenceInvite',
    inviteServiceCallFlowsUrl: 'https://api.jitsi.net/conferenceinvitecallflows',
    peopleSearchQueryTypes: ['user','conferenceRooms'],
    startAudioMuted: 9,
    startVideoMuted: 9,
    enableUserRolesBasedOnToken: false,
    enableLayerSuspension: false,
    feedbackPercentage: 0,
    deploymentUrls: {
        userDocumentationURL: "https://jitsi.github.io/handbook/help",
    },
    chromeExtensionBanner: {
        url: "https://chrome.google.com/webstore/detail/jitsi-meetings/kglhbbefdnlheedjiejgomgmfplipfeb",
        chromeExtensionsInfo: [{"path": "jitsi-logo-48x48.png", "id": "kglhbbefdnlheedjiejgomgmfplipfeb"}]
    },
    prejoinPageEnabled: true,
    enableInsecureRoomNameWarning: true,
    hepopAnalyticsUrl: "",
    hepopAnalyticsEvent: {
        product: "lib-jitsi-meet",
        subproduct: "meet-jit-si",
        name: "jitsi.page.load.failed",
        action: "page.load.failed",
        actionSubject: "page.load",
        type: "page.load.failed",
        source: "page.load",
        attributes: {
            type: "operational",
            source: 'page.load'
        },
        server: "meet.jit.si"
    },
    deploymentInfo: {
        environment: 'meet-jit-si',
        envType: 'prod',
        releaseNumber: '735',
        shard: 'meet-jit-si-eu-central-1a-s50',
        region: 'eu-central-1',
        userRegion: 'eu-central-1',
        crossRegion: (!'eu-central-1' || 'eu-central-1' === 'eu-central-1') ? 0 : 1
    },
    rttMonitor: {
        enabled: false,
        initialDelay: 30000,
        getStatsInterval: 10000,
        analyticsInterval: 60000,
        stunServers: {"us-east-1": "all-us-east-1-turn.jitsi.net:443", "ap-se-2": "all-ap-se-2-turn.jitsi.net:443", "ap-se-1": "all-ap-se-1-turn.jitsi.net:443", "us-west-2": "all-us-west-2-turn.jitsi.net:443", "eu-central-1": "all-eu-central-1-turn.jitsi.net:443", "eu-west-1": "all-eu-west-1-turn.jitsi.net:443"}
    },
    e2eping: {
        pingInterval: -1
    },
    abTesting: {
    },
    testing: {
        capScreenshareBitrate: 1,
        octo: {
            probability: 1
        }
    }
};
</script>
    <script src="libs/external_connect.js?v=1"></script>

    <script src="libs/do_external_connect.min.js?v=1"></script>
    <script>/* eslint-disable no-unused-vars, no-var, max-len */

var interfaceConfig = {
     
    DEFAULT_BACKGROUND: '#33ffff',

     
    DISABLE_VIDEO_BACKGROUND: false,

    INITIAL_TOOLBAR_TIMEOUT: 20000,
    TOOLBAR_TIMEOUT: 4000,
    TOOLBAR_ALWAYS_VISIBLE: true,
    DEFAULT_REMOTE_DISPLAY_NAME: 'Hellotter',
    DEFAULT_LOCAL_DISPLAY_NAME: 'me',
    SHOW_JITSI_WATERMARK: true,
    JITSI_WATERMARK_LINK: 'https://hellotter.gyzw.cc/',
    DEFAULT_LOGO_URL: 'https://hellotter.gyzw.cc/public/images/Hellotter-logo-cyan.png',

    
    SHOW_WATERMARK_FOR_GUESTS: true,
    SHOW_BRAND_WATERMARK: false,
    BRAND_WATERMARK_LINK: '',
    SHOW_POWERED_BY: false,
    SHOW_DEEP_LINKING_IMAGE: false,
    GENERATE_ROOMNAMES_ON_WELCOME_PAGE: true,
    DISPLAY_WELCOME_PAGE_CONTENT: false,
    DISPLAY_WELCOME_PAGE_TOOLBAR_ADDITIONAL_CONTENT: true,
    APP_NAME: 'Hellotter',
    NATIVE_APP_NAME: 'Hellotter',
    PROVIDER_NAME: 'Hellotter',
    LANG_DETECTION: true,  
    INVITATION_POWERED_BY: false,

   
    AUTHENTICATION_ENABLE: true,
 
    TOOLBAR_BUTTONS: [
        'microphone', 'camera', 'closedcaptions', 'desktop', 'fullscreen',
        'fodeviceselection', 'hangup', 'profile', 'info', 'chat', 'recording',
        'livestreaming', 'etherpad', 'sharedvideo', 'settings', 'raisehand',
        'videoquality', 'filmstrip', 'invite', 'feedback', 'stats', 'shortcuts',
        'tileview', 'videobackgroundblur', 'download', 'help', 'mute-everyone',
        'e2ee'
    ],


    SETTINGS_SECTIONS: [ 'devices', 'language', 'moderator', 'profile', 'calendar' ],

     
    VIDEO_LAYOUT_FIT: 'both',

     
    filmStripOnly: false,
 
    VERTICAL_FILMSTRIP: true,

     CLOSE_PAGE_GUEST_HINT: '<div class = "hint-msg">For a complete meeting history <a href = "https://app.8x8.vc/?register=true" rel = "noopener" target = "_blank">sign up now</a> <br> for 8x8 Video Meetings.',
    SHOW_PROMOTIONAL_CLOSE_PAGE: true,

    RANDOM_AVATAR_URL_PREFIX: 'https://abotars.jitsi.net/meeple/',
    RANDOM_AVATAR_URL_SUFFIX: '',
    FILM_STRIP_MAX_HEIGHT: 120,

    // Enables feedback star animation.
    ENABLE_FEEDBACK_ANIMATION: false,
    DISABLE_FOCUS_INDICATOR: true,
    DISABLE_DOMINANT_SPEAKER_INDICATOR: false,

    
    DISABLE_TRANSCRIPTION_SUBTITLES: true,

    
    DISABLE_RINGING: true,
    AUDIO_LEVEL_PRIMARY_COLOR: 'rgba(255,255,255,0.4)',
    AUDIO_LEVEL_SECONDARY_COLOR: 'rgba(255,255,255,0.2)',
    POLICY_LOGO: null,
    LOCAL_THUMBNAIL_RATIO: 16 / 9, // 16:9
    REMOTE_THUMBNAIL_RATIO: 1, // 1:1
    // Documentation reference for the live streaming feature.
    LIVE_STREAMING_HELP_LINK: 'https://jitsi.org/live',
 
    MOBILE_APP_PROMO: true,

     
    MAXIMUM_ZOOMING_COEFFICIENT: 1.3,

     
    SUPPORT_URL: 'https://community.jitsi.org/',

     
    CONNECTION_INDICATOR_AUTO_HIDE_ENABLED: true,

    
    CONNECTION_INDICATOR_AUTO_HIDE_TIMEOUT: 5000,

     
    CONNECTION_INDICATOR_DISABLED: false,

    
    VIDEO_QUALITY_LABEL_DISABLED: false,

    
    RECENT_LIST_ENABLED: true,
 
    OPTIMAL_BROWSERS: [ 'chrome', 'chromium', 'nwjs', 'electron', 'firefox', 'safari' ],

   
    UNSUPPORTED_BROWSERS: [],

    
    AUTO_PIN_LATEST_SCREEN_SHARE: 'remote-only',

    
    SHOW_CHROME_EXTENSION_BANNER: false,

     DISABLE_PRESENCE_STATUS: true,

     DISABLE_JOIN_LEAVE_NOTIFICATIONS: true

    
};

</script>
    <script>

 var loggingConfig = {
     defaultLogLevel: 'trace',

   
    'modules/RTC/TraceablePeerConnection.js': 'info',
    'modules/statistics/CallStats.js': 'info',
    'modules/xmpp/strophe.util.js': 'log'
};
 
typeof module === 'object'
    && typeof exports === 'object'
    && (module.exports = loggingConfig);
</script>
    <script src="libs/lib-jitsi-meet.min.js?v=4203.857"></script>
    <script src="libs/app.bundle.min.js?v=4203.857"></script>
    <title>Helloter</title>
<meta property="og:title" content="Hellotter"/>
<meta property="og:image" content="https://webrtc.gyzw.cc/hellotervideo/public/images/Hellotter-logo-cyan.png"/>
<meta property="og:description" content="Join a Hellotter video conference"/>
<meta description="Join Hellotter"/>
<meta itemprop="name" content="Hellotter"/>
<meta itemprop="description" content="Join a Hellotter"/>
<meta itemprop="image" content="https://webrtc.gyzw.cc/hellotervideo/public/images/Hellotter-logo-cyan.png"/>
<link rel="icon" type="image/png" href="https://webrtc.gyzw.cc/hellotervideo/public/images/Hellotter-logo-cyan.png"/>

    

<script>
(function() {
  var filter_list=[];
  if (filter_list && filter_list.length >0) {
    interfaceConfig.TOOLBAR_BUTTONS = interfaceConfig.TOOLBAR_BUTTONS.filter(function (e) {
      return filter_list.indexOf(e) == -1;
    });
  }

  // Function called when any of the critical index.html resources
  // fail to load.
  window.postLoadErrorHandler = function (fileRef) {
    if (typeof config.hepopAnalyticsUrl !== 'string'
        || typeof config.hepopAnalyticsEvent !== "object") {
        // Nothing to be done here
        return;
    }
    function responseHandler () {
        console.log("HEPop analytics response:", this.responseText);
    }
    // Set required dynamic fields
    var event = config.hepopAnalyticsEvent;
    event.serverTime = new Date().getTime();

    if (config) {
        event.user = config.deploymentInfo;
    } else {
        event.user = {};
    }
    event.device_id=Math.random().toString(36).substring(2);

    if (window.localStorage) {
        event.user.callstats_name
            = window.localStorage.callStatsUserName;
    }

    if (fileRef) {
        event.user.reason = fileRef;
    }
    event.user.url = window.location.href;
    event.user.conference_name = window.location.pathname.substr(1,window.location.pathname.length-1);

    var xhttp = new XMLHttpRequest();
    xhttp.addEventListener("load", responseHandler);
    xhttp.open("POST", config.hepopAnalyticsUrl, true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.send(JSON.stringify(event));
  };
}());
</script>
  
     
    <template id="settings-toolbar-additional-content-template"></template>

  </head>


  <body>

     @yield('content')
