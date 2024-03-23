<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 2,
                'key' => 'currencyCode',
                'value' => 'USD',
            ),
            1 => 
            array (
                'id' => 3,
                'key' => 'currency',
                'value' => '$',
            ),
            2 => 
            array (
                'id' => 4,
                'key' => 'currencyCountryCode',
                'value' => 'US',
            ),
            3 => 
            array (
                'id' => 11,
                'key' => 'appColorTheme.accentColor',
                'value' => '#4735a1',
            ),
            4 => 
            array (
                'id' => 12,
                'key' => 'appColorTheme.primaryColor',
                'value' => '#30246c',
            ),
            5 => 
            array (
                'id' => 13,
                'key' => 'appColorTheme.primaryColorDark',
                'value' => '#2b2061',
            ),
            6 => 
            array (
                'id' => 14,
                'key' => 'appColorTheme.onboarding1Color',
                'value' => '#F9F9F9',
            ),
            7 => 
            array (
                'id' => 15,
                'key' => 'appColorTheme.onboarding2Color',
                'value' => '#F6EFEE',
            ),
            8 => 
            array (
                'id' => 16,
                'key' => 'appColorTheme.onboarding3Color',
                'value' => '#FFFBFC',
            ),
            9 => 
            array (
                'id' => 17,
                'key' => 'appColorTheme.onboardingIndicatorDotColor',
                'value' => '#5a0cf6',
            ),
            10 => 
            array (
                'id' => 18,
                'key' => 'appColorTheme.onboardingIndicatorActiveDotColor',
                'value' => '#37069b',
            ),
            11 => 
            array (
                'id' => 19,
                'key' => 'appColorTheme.openColor',
                'value' => '#5ec3ff',
            ),
            12 => 
            array (
                'id' => 20,
                'key' => 'appColorTheme.closeColor',
                'value' => '#FF0000',
            ),
            13 => 
            array (
                'id' => 21,
                'key' => 'appColorTheme.deliveryColor',
                'value' => '#FFBF00',
            ),
            14 => 
            array (
                'id' => 22,
                'key' => 'appColorTheme.pickupColor',
                'value' => '#0000FF',
            ),
            15 => 
            array (
                'id' => 23,
                'key' => 'appColorTheme.ratingColor',
                'value' => '#FFBF00',
            ),
            16 => 
            array (
                'id' => 24,
                'key' => 'appColorTheme.pendingColor',
                'value' => '#0099FF',
            ),
            17 => 
            array (
                'id' => 25,
                'key' => 'appColorTheme.preparingColor',
                'value' => '#0000FF',
            ),
            18 => 
            array (
                'id' => 26,
                'key' => 'appColorTheme.enrouteColor',
                'value' => '#00FF00',
            ),
            19 => 
            array (
                'id' => 27,
                'key' => 'appColorTheme.failedColor',
                'value' => '#FF0000',
            ),
            20 => 
            array (
                'id' => 28,
                'key' => 'appColorTheme.cancelledColor',
                'value' => '#00ffff',
            ),
            21 => 
            array (
                'id' => 29,
                'key' => 'appColorTheme.deliveredColor',
                'value' => '#01A368',
            ),
            22 => 
            array (
                'id' => 30,
                'key' => 'appColorTheme.successfulColor',
                'value' => '#01A368',
            ),
            23 => 
            array (
                'id' => 32,
                'key' => 'appName',
                'value' => 'Glover',
            ),
            24 => 
            array (
                'id' => 33,
                'key' => 'websiteName',
                'value' => 'Glover',
            ),
            25 => 
            array (
                'id' => 34,
                'key' => 'countryCode',
                'value' => 'INTERNATIONAL,GH',
            ),
            26 => 
            array (
                'id' => 39,
                'key' => 'appVerisonCode',
                'value' => '68',
            ),
            27 => 
            array (
                'id' => 40,
                'key' => 'appVerison',
                'value' => '1.7.41',
            ),
            28 => 
            array (
                'id' => 41,
                'key' => 'otpGateway',
                'value' => 'Firebase',
            ),
            29 => 
            array (
                'id' => 42,
                'key' => 'appCountryCode',
                'value' => 'INTERNATIONAL,GH',
            ),
            30 => 
            array (
                'id' => 43,
                'key' => 'enableGoogleDistance',
                'value' => '0',
            ),
            31 => 
            array (
                'id' => 44,
                'key' => 'enableSingleVendor',
                'value' => '0',
            ),
            32 => 
            array (
                'id' => 45,
                'key' => 'enableProofOfDelivery',
                'value' => '1',
            ),
            33 => 
            array (
                'id' => 46,
                'key' => 'enableDriverWallet',
                'value' => '0',
            ),
            34 => 
            array (
                'id' => 47,
                'key' => 'driverWalletRequired',
                'value' => '0',
            ),
            35 => 
            array (
                'id' => 48,
                'key' => 'vendorEarningEnabled',
                'value' => '1',
            ),
            36 => 
            array (
                'id' => 49,
                'key' => 'alertDuration',
                'value' => '20',
            ),
            37 => 
            array (
                'id' => 50,
                'key' => 'driverSearchRadius',
                'value' => '10',
            ),
            38 => 
            array (
                'id' => 51,
                'key' => 'maxDriverOrderAtOnce',
                'value' => '3',
            ),
            39 => 
            array (
                'id' => 52,
                'key' => 'maxDriverOrderNotificationAtOnce',
                'value' => '5',
            ),
            40 => 
            array (
                'id' => 53,
                'key' => 'clearRejectedAutoAssignment',
                'value' => '5',
            ),
            41 => 
            array (
                'id' => 54,
                'key' => 'enableGroceryMode',
                'value' => '0',
            ),
            42 => 
            array (
                'id' => 55,
                'key' => 'enableReferSystem',
                'value' => '1',
            ),
            43 => 
            array (
                'id' => 56,
                'key' => 'enableChat',
                'value' => '1',
            ),
            44 => 
            array (
                'id' => 57,
                'key' => 'enableOrderTracking',
                'value' => '1',
            ),
            45 => 
            array (
                'id' => 58,
                'key' => 'enableParcelVendorByLocation',
                'value' => '0',
            ),
            46 => 
            array (
                'id' => 59,
                'key' => 'webviewDirection',
                'value' => 'ltr',
            ),
            47 => 
            array (
                'id' => 60,
                'key' => 'referRewardAmount',
                'value' => '10',
            ),
            48 => 
            array (
                'id' => 61,
                'key' => 'enableParcelMultipleStops',
                'value' => '1',
            ),
            49 => 
            array (
                'id' => 62,
                'key' => 'maxParcelStops',
                'value' => '4',
            ),
            50 => 
            array (
                'id' => 64,
                'key' => 'websiteHeaderTitle',
                'value' => 'BEST OFFER',
            ),
            51 => 
            array (
                'id' => 65,
                'key' => 'websiteHeaderSubtitle',
                'value' => 'Welcome to Glover, where we\'re dedicated to simplifying your daily routine. With our range of services, including food delivery, grocery delivery, and taxi booking, you can easily and conveniently take care of your daily needs in one place. Our fast and reliable service is designed to save you time and hassle, so you can focus on what\'s important. Browse our offerings and place your order today. Thank you for choosing Glover!',
            ),
            52 => 
            array (
                'id' => 67,
                'key' => 'social.fbLink',
                'value' => '',
            ),
            53 => 
            array (
                'id' => 68,
                'key' => 'social.igLink',
                'value' => '',
            ),
            54 => 
            array (
                'id' => 69,
                'key' => 'social.twLink',
                'value' => '',
            ),
            55 => 
            array (
                'id' => 70,
                'key' => 'websiteColor',
                'value' => '#30246c',
            ),
            56 => 
            array (
                'id' => 71,
                'key' => 'locale',
                'value' => 'English',
            ),
            57 => 
            array (
                'id' => 72,
                'key' => 'localeCode',
                'value' => 'en',
            ),
            58 => 
            array (
                'id' => 73,
                'key' => 'timeZone',
                'value' => 'Africa/Accra',
            ),
            59 => 
            array (
                'id' => 74,
                'key' => 'maxScheduledDay',
                'value' => '5',
            ),
            60 => 
            array (
                'id' => 75,
                'key' => 'maxScheduledTime',
                'value' => '2',
            ),
            61 => 
            array (
                'id' => 76,
                'key' => 'minScheduledTime',
                'value' => '2',
            ),
            62 => 
            array (
                'id' => 77,
                'key' => 'autoCancelPendingOrderTime',
                'value' => '10',
            ),
            63 => 
            array (
                'id' => 78,
                'key' => 'defaultVendorRating',
                'value' => '5',
            ),
            64 => 
            array (
                'id' => 84,
                'key' => 'notifyAdmin',
                'value' => '1',
            ),
            65 => 
            array (
                'id' => 85,
                'key' => 'notifyCityAdmin',
                'value' => '1',
            ),
            66 => 
            array (
                'id' => 94,
                'key' => 'androidDownloadLink',
                'value' => '',
            ),
            67 => 
            array (
                'id' => 95,
                'key' => 'iosDownloadLink',
                'value' => '',
            ),
            68 => 
            array (
                'id' => 96,
                'key' => 'emergencyContact',
                'value' => '911',
            ),
            69 => 
            array (
                'id' => 97,
                'key' => 'driversCommission',
                'value' => '12',
            ),
            70 => 
            array (
                'id' => 98,
                'key' => 'vendorsCommission',
                'value' => '20',
            ),
            71 => 
            array (
                'id' => 99,
                'key' => 'taxi.cancelPendingTaxiOrderTime',
                'value' => '3',
            ),
            72 => 
            array (
                'id' => 100,
                'key' => 'taxi.msg.pending',
                'value' => 'Searching for driver',
            ),
            73 => 
            array (
                'id' => 101,
                'key' => 'taxi.msg.preparing',
                'value' => 'Driver assigned to your trip',
            ),
            74 => 
            array (
                'id' => 102,
                'key' => 'taxi.msg.ready',
                'value' => 'Driver arrived at your pickup location',
            ),
            75 => 
            array (
                'id' => 103,
                'key' => 'taxi.msg.enroute',
                'value' => 'Trip started',
            ),
            76 => 
            array (
                'id' => 104,
                'key' => 'taxi.msg.completed',
                'value' => 'Trip completed',
            ),
            77 => 
            array (
                'id' => 105,
                'key' => 'taxi.msg.cancelled',
                'value' => 'Trip cancelled',
            ),
            78 => 
            array (
                'id' => 106,
                'key' => 'taxi.msg.failed',
                'value' => 'Trip Failed',
            ),
            79 => 
            array (
                'id' => 107,
                'key' => 'clearFirestore',
                'value' => '1',
            ),
            80 => 
            array (
                'id' => 108,
                'key' => 'taxi.drivingSpeed',
                'value' => '30',
            ),
            81 => 
            array (
                'id' => 109,
                'key' => 'enableOTPLogin',
                'value' => '0',
            ),
            82 => 
            array (
                'id' => 110,
                'key' => 'enableUploadPrescription',
                'value' => '1',
            ),
            83 => 
            array (
                'id' => 116,
                'key' => 'minimumTopupAmount',
                'value' => '100',
            ),
            84 => 
            array (
                'id' => 117,
                'key' => 'googleLogin',
                'value' => '0',
            ),
            85 => 
            array (
                'id' => 118,
                'key' => 'appleLogin',
                'value' => '0',
            ),
            86 => 
            array (
                'id' => 119,
                'key' => 'facebbokLogin',
                'value' => '0',
            ),
            87 => 
            array (
                'id' => 120,
                'key' => 'distanceCoverLocationUpdate',
                'value' => '2',
            ),
            88 => 
            array (
                'id' => 121,
                'key' => 'timePassLocationUpdate',
                'value' => '30',
            ),
            89 => 
            array (
                'id' => 122,
                'key' => 'taxi.multipleCurrency',
                'value' => '0',
            ),
            90 => 
            array (
                'id' => 123,
                'key' => 'orderVerificationType',
                'value' => 'signature',
            ),
            91 => 
            array (
                'id' => 124,
                'key' => 'vendorsHomePageListCount',
                'value' => '15',
            ),
            92 => 
            array (
                'id' => 125,
                'key' => 'bannerHeight',
                'value' => '120',
            ),
            93 => 
            array (
                'id' => 126,
                'key' => 'allowVendorCreateDrivers',
                'value' => '1',
            ),
            94 => 
            array (
                'id' => 127,
                'key' => 'showVendorTypeImageOnly',
                'value' => '0',
            ),
            95 => 
            array (
                'id' => 131,
                'key' => 'vendorSetDeliveryFee',
                'value' => '0',
            ),
            96 => 
            array (
                'id' => 133,
                'key' => 'cc.purchase_code',
                'value' => 'rqwrqweqweqweqweqwe',
            ),
            97 => 
            array (
                'id' => 134,
                'key' => 'cc.buyer_username',
                'value' => 'sdasdasd',
            ),
            98 => 
            array (
                'id' => 135,
                'key' => 'pos.printReciept',
                'value' => '1',
            ),
            99 => 
            array (
                'id' => 136,
                'key' => 'pos.showLogo',
                'value' => '1',
            ),
            100 => 
            array (
                'id' => 137,
                'key' => 'pos.paperSize',
                'value' => '300',
            ),
            101 => 
            array (
                'id' => 138,
                'key' => 'pos.showVendorDetails',
                'value' => '0',
            ),
            102 => 
            array (
                'id' => 139,
                'key' => 'pos.outro',
                'value' => 'thank you for shoping',
            ),
            103 => 
            array (
                'id' => 140,
                'key' => 'cronJobLastRun',
                'value' => '12 Feb 2024 at 11:22:02 am',
            ),
            104 => 
            array (
                'id' => 146,
                'key' => 'cronJobLastRunRaw',
                'value' => '2024-02-12 11:22:02',
            ),
            105 => 
            array (
                'id' => 147,
                'key' => 'ui.home.showBannerOnHomeScreen',
                'value' => '1',
            ),
            106 => 
            array (
                'id' => 148,
                'key' => 'partnersCanRegister',
                'value' => '1',
            ),
            107 => 
            array (
                'id' => 149,
                'key' => 'taxi.canScheduleTaxiOrder',
                'value' => '1',
            ),
            108 => 
            array (
                'id' => 150,
                'key' => 'qrcodeLogin',
                'value' => '1',
            ),
            109 => 
            array (
                'id' => 151,
                'key' => 'autoassignment_status',
                'value' => 'ready',
            ),
            110 => 
            array (
                'id' => 152,
                'key' => 'ui.home.vendortypePerRow',
                'value' => '2',
            ),
            111 => 
            array (
                'id' => 153,
                'key' => 'ui.home.bannerPosition',
                'value' => 'Bottom',
            ),
            112 => 
            array (
                'id' => 154,
                'key' => 'ui.home.vendortypeListStyle',
                'value' => 'Both',
            ),
            113 => 
            array (
                'id' => 155,
                'key' => 'useFCMJob',
                'value' => '1',
            ),
            114 => 
            array (
                'id' => 156,
                'key' => 'delayFCMJobSeconds',
                'value' => '1',
            ),
            115 => 
            array (
                'id' => 157,
                'key' => 'taxi.taxiMaxScheduleDays',
                'value' => '3',
            ),
            116 => 
            array (
                'id' => 239,
                'key' => 'taxiUseFirebaseServer',
                'value' => '0',
            ),
            117 => 
            array (
                'id' => 240,
                'key' => 'taxiDelayTaxiMatching',
                'value' => '2',
            ),
            118 => 
            array (
                'id' => 241,
                'key' => 'delayResearchTaxiMatching',
                'value' => '30',
            ),
            119 => 
            array (
                'id' => 242,
                'key' => 'enableFatchByLocation',
                'value' => '0',
            ),
            120 => 
            array (
                'id' => 243,
                'key' => 'enableNumericOrderCode',
                'value' => '1',
            ),
            121 => 
            array (
                'id' => 249,
                'key' => 'enableMultipleVendorOrder',
                'value' => '1',
            ),
            122 => 
            array (
                'id' => 250,
                'key' => 'walletTopupPercentage',
                'value' => '80',
            ),
            123 => 
            array (
                'id' => 251,
                'key' => 'finance.allowWalletTransfer',
                'value' => '1',
            ),
            124 => 
            array (
                'id' => 252,
                'key' => 'finance.fullInfoRequired',
                'value' => '0',
            ),
            125 => 
            array (
                'id' => 255,
                'key' => 'finance.preventOrderCancellation',
                'value' => '["ready","enroute","delivered"]',
            ),
            126 => 
            array (
                'id' => 256,
                'key' => 'finance.autoRefund',
                'value' => '0',
            ),
            127 => 
            array (
                'id' => 257,
                'key' => 'inapp.support',
                'value' => '<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src=\'https://embed.tawk.to/5d2378ca7a48df6da2438c6a/default\';
s1.charset=\'UTF-8\';
s1.setAttribute(\'crossorigin\',\'*\');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->',
            ),
            128 => 
            array (
                'id' => 258,
                'key' => 'upgrade.customer.android',
                'value' => '36',
            ),
            129 => 
            array (
                'id' => 259,
                'key' => 'upgrade.customer.ios',
                'value' => '36',
            ),
            130 => 
            array (
                'id' => 260,
                'key' => 'upgrade.customer.force',
                'value' => '0',
            ),
            131 => 
            array (
                'id' => 261,
                'key' => 'upgrade.driver.android',
                'value' => '33',
            ),
            132 => 
            array (
                'id' => 262,
                'key' => 'upgrade.driver.ios',
                'value' => '33',
            ),
            133 => 
            array (
                'id' => 263,
                'key' => 'upgrade.driver.force',
                'value' => '0',
            ),
            134 => 
            array (
                'id' => 264,
                'key' => 'upgrade.vendor.android',
                'value' => '33',
            ),
            135 => 
            array (
                'id' => 265,
                'key' => 'upgrade.vendor.ios',
                'value' => '33',
            ),
            136 => 
            array (
                'id' => 266,
                'key' => 'upgrade.vendor.force',
                'value' => '0',
            ),
            137 => 
            array (
                'id' => 269,
                'key' => 'map.geocoderType',
                'value' => 'Opencage',
            ),
            138 => 
            array (
                'id' => 270,
                'key' => 'map.useGoogleOnApp',
                'value' => '',
            ),
            139 => 
            array (
                'id' => 293,
                'key' => 'auto_create_social_account',
                'value' => '1',
            ),
            140 => 
            array (
                'id' => 294,
                'key' => 'enableDriverTypeSwitch',
                'value' => '0',
            ),
            141 => 
            array (
                'id' => 490,
                'key' => 'finance.allowWallet',
                'value' => '1',
            ),
            142 => 
            array (
                'id' => 491,
                'key' => 'finance.generalTax',
                'value' => '0',
            ),
            143 => 
            array (
                'id' => 492,
                'key' => 'finance.minOrderAmount',
                'value' => '0',
            ),
            144 => 
            array (
                'id' => 493,
                'key' => 'finance.maxOrderAmount',
                'value' => '1000000',
            ),
            145 => 
            array (
                'id' => 494,
                'key' => 'finance.amount_to_point',
                'value' => '0.001',
            ),
            146 => 
            array (
                'id' => 495,
                'key' => 'finance.point_to_amount',
                'value' => '0.001',
            ),
            147 => 
            array (
                'id' => 496,
                'key' => 'finance.enableLoyalty',
                'value' => '1',
            ),
            148 => 
            array (
                'id' => 497,
                'key' => 'finance.delivery.charge_per_km',
                'value' => '0',
            ),
            149 => 
            array (
                'id' => 498,
                'key' => 'finance.delivery.base_delivery_fee',
                'value' => '5',
            ),
            150 => 
            array (
                'id' => 499,
                'key' => 'finance.delivery.delivery_fee',
                'value' => '10',
            ),
            151 => 
            array (
                'id' => 500,
                'key' => 'finance.delivery.delivery_range',
                'value' => '',
            ),
            152 => 
            array (
                'id' => 501,
                'key' => 'finance.delivery.collectDeliveryCash',
                'value' => '1',
            ),
            153 => 
            array (
                'id' => 503,
                'key' => 'map.placeFilterCountryCodes',
                'value' => '',
            ),
            154 => 
            array (
                'id' => 504,
                'key' => 'driverWalletRequiredForTotal',
                'value' => '0',
            ),
            155 => 
            array (
                'id' => 521,
                'key' => 'autoassignmentsystem',
                'value' => '0',
            ),
            156 => 
            array (
                'id' => 522,
                'key' => 'taxi.msg.cash_overdraft_completed',
                'value' => '',
            ),
            157 => 
            array (
                'id' => 523,
                'key' => 'taxi.msg.overdraft_completed',
                'value' => '',
            ),
            158 => 
            array (
                'id' => 524,
                'key' => 'taxi.recalculateFare',
                'value' => '1',
            ),
            159 => 
            array (
                'id' => 553,
                'key' => 'ui.categorySize.w',
                'value' => '60',
            ),
            160 => 
            array (
                'id' => 554,
                'key' => 'ui.categorySize.h',
                'value' => '60',
            ),
            161 => 
            array (
                'id' => 555,
                'key' => 'ui.categorySize.text.size',
                'value' => '12',
            ),
            162 => 
            array (
                'id' => 556,
                'key' => 'ui.categorySize.row',
                'value' => '4',
            ),
            163 => 
            array (
                'id' => 557,
                'key' => 'ui.categorySize.page',
                'value' => '8',
            ),
            164 => 
            array (
                'id' => 558,
                'key' => 'ui.currency.location',
                'value' => 'Left',
            ),
            165 => 
            array (
                'id' => 559,
                'key' => 'ui.currency.format',
                'value' => ',',
            ),
            166 => 
            array (
                'id' => 560,
                'key' => 'ui.currency.decimal_format',
                'value' => '.',
            ),
            167 => 
            array (
                'id' => 561,
                'key' => 'ui.currency.decimals',
                'value' => '2',
            ),
            168 => 
            array (
                'id' => 562,
                'key' => 'ui.chat.canVendorChat',
                'value' => '1',
            ),
            169 => 
            array (
                'id' => 563,
                'key' => 'ui.chat.canCustomerChat',
                'value' => '1',
            ),
            170 => 
            array (
                'id' => 564,
                'key' => 'ui.chat.canDriverChat',
                'value' => '1',
            ),
            171 => 
            array (
                'id' => 565,
                'key' => 'ui.showVendorPhone',
                'value' => '0',
            ),
            172 => 
            array (
                'id' => 585,
                'key' => 'ui.home.showWalletOnHomeScreen',
                'value' => '1',
            ),
            173 => 
            array (
                'id' => 586,
                'key' => 'ui.home.homeViewStyle',
                'value' => '1',
            ),
            174 => 
            array (
                'id' => 587,
                'key' => 'ui.home.vendortypeHeight',
                'value' => '60',
            ),
            175 => 
            array (
                'id' => 588,
                'key' => 'ui.home.vendortypeWidth',
                'value' => '60',
            ),
            176 => 
            array (
                'id' => 589,
                'key' => 'ui.home.vendortypeImageStyle',
                'value' => 'fill',
            ),
            177 => 
            array (
                'id' => 590,
                'key' => 'enableEmailLogin',
                'value' => '1',
            ),
            178 => 
            array (
                'id' => 694,
                'key' => 'finance.driverSelfPay',
                'value' => '0',
            ),
            179 => 
            array (
                'id' => 695,
                'key' => 'finance.orderOnlinePaymentTimeout',
                'value' => '10',
            ),
            180 => 
            array (
                'id' => 696,
                'key' => 'finance.walletTopupPaymentTimeout',
                'value' => '10',
            ),
            181 => 
            array (
                'id' => 697,
                'key' => 'finance.vendorSubscriptionPaymentTimeout',
                'value' => '10',
            ),
        ));
        
        
    }
}