<head>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/comparison.js"></script> -->

<script>
	require(["require.config"], function() {
		require(["pages/enterprise", "bootstrap", "jquery"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/enterprise.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/compare.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
#tooltip
{
    text-align: center;
    color: #fff;
    background: #111;
    position: absolute;
    z-index: 100;
    padding: 15px;
}
 
    #tooltip:after /* triangle decoration */
    {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #111;
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        margin-left: -10px;
    }
 
        #tooltip.top:after
        {
            border-top-color: transparent;
            border-bottom: 10px solid #111;
            top: -20px;
            bottom: auto;
        }
 
        #tooltip.left:after
        {
            left: 10px;
            margin: 0;
        }
 
        #tooltip.right:after
        {
            right: 10px;
            left: auto;
            margin: 0;
        }

</style>
</head>
<body>

<section class="enterprise-hero-section">
	<div class="container-fluid background"> 
		<div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Compare cloud technologies');?></h1>
				<h2><?php echo $l->t('There is a wide variety of public and private cloud vendors out there. To save you the time of digging through documentation, we provide you an overview of how they compare to Nextcloud');?></h2>
			</div>
		</div>
	</div>
</div>

<section class="cd-products-comparison-table">
	<div class="container-fluid">
	<section class="cd-intro">
<!-- 		<h1>Compare Cloud Storage Technologies</h1> -->
	</section> <!-- .cd-intro -->
	<section class="cd-products-comparison-table">
		<header>
			<h2>Compare Products <br /> <small>Click on or hover items to learn more</small></h2>
			<div class="actions">
			<br />
				<a href="#0" class="reset">Reset</a>
				<a href="#0" class="filter">Filter</a>
			</div>
		</header>
		<div class="cd-products-table">
			<div class="features">
				<div class="top-info"></div>
				<ul class="cd-features-list">
					<li title="" rel="tooltip"><a href="https://nextcloud.com/blog/why-the-agpl-is-great-for-business-users/">License</a></li> <!--License-->
					<li title="Limits imposed by either the purchased plan or your own infrastructure when self-hosting" rel="tooltip">Unlimited storage</li> <!-- Unlimited storage -->
					<li title="" rel="tooltip">Large file support</li> <!--Large file support-->
					<li title="" rel="tooltip">Self hosted/on premise</li> <!--Self hosted/on premise-->
						<li class="cd-group">Clients</li> <!--Client-->
					<li title="" rel="tooltip">Mobile Clients</li> <!--Mobile Clients-->
					<li title="" rel="tooltip">Auto upload images/video</li> <!--Auto upload images/video-->
					<li title="" rel="tooltip">Desktop clients</li> <!--Desktop clients-->
					<li title="" rel="tooltip">Sync any local folder</li><!-- Sync any local folder-->
					<li title="" rel="tooltip">LAN Synchronization</li> <!--LAN Synchronization-->
					<li title="" rel="tooltip">Extensible with apps</li> <!--Extensible with apps-->
					<li title="" rel="tooltip">Outlook integration</li> <!--Outlook integration-->
						<li class="cd-group">Server features</li> <!--Server features-->
					<li title="file name search/full text search" rel="tooltip">Full text search</li> <!--Full text search-->
					<li title="" rel="tooltip">File Versioning</li> <!--File Versioning-->
					<li title="" rel="tooltip">File Metadata</li> <!--File Metadata-->
					<li title="" rel="tooltip">View PDF, images, video</li> <!--View PDF, images, video-->
					<li title="" rel="tooltip">Audio/Video/Text chat</li> <!--Audio/Video/Text chat-->
					<li title="" rel="tooltip">Calendar/Contact/Mail integration</li> <!--Calendar/Contact/Mail integration-->
					<li title="" rel="tooltip">Mobile calendar/contact integration</li> <!--Mobile calendar/contact integration-->
					<li title="" rel="tooltip">Online Office</li> <!--Online Office-->
					<li title="Public link to folder recipient can upload to, which hides existing content of the shared folder" rel="tooltip">Secure Drop (customer file upload)</li> <!--Secure Drop (customer file upload)-->
					<li title="Sharing between separate cloud instances of <strong>different vendors</strong>. Example, Nextcloud users can share files with users on Pydio and ownCloud servers." rel="tooltip">Inter-server sharing</li> <!--Inter-server sharing-->
						<li class="cd-group">Admin features</li> <!--Admin features-->
					<li title="" rel="tooltip">Content workflow automation</li> <!--Content workflow automation-->
					<li title="" rel="tooltip">Automatic script execution</li> <!--Automatic script execution-->
					<li title="files created, updated, shared, unshared and deleted by user or others" rel="tooltip">Event notifications</li> <!--Event notifications-->
					<li title="" rel="tooltip">Real-time (push) notifications</li> <!--Real-time (push) notifications-->
					<li title="" rel="tooltip">Monitoring web/API interface</li> <!--Monitoring web/API interface-->
					<li title="" rel="tooltip">Data retention policy support</li> <!--Data retention policy support-->
					<li title="Life cycle matching your operating system" rel="tooltip">Long term support (5-10 years)</li> <!--Long term support (5-10 years)-->
					<li title="" rel="tooltip">Branding</li> <!--Branding-->
					<li title="Mandatory if you have a legal requirement to find out who did what and when." rel="tooltip">Full audit trail</li> <!--Full audit trail-->
					<li class="cd-group">Security features</li> <!--Security features-->
					<li title="" rel="tooltip">Server side encryption</li> <!--Server side encryption-->
					<li title="" rel="tooltip">Brute force hacking protection</li> <!--Brute force hacking protection-->
					<li title="" rel="tooltip">NIST compliant password policy</li> <!--NIST compliant password policy-->
					<li title="" rel="tooltip">Web UI secured with CSP 3.0</li> <!--Web UI secured with CSP 3.0-->
					<li title="" rel="tooltip">With same-site cookies</li> <!--With same-site cookies-->
					<li title="" rel="tooltip">File Access Control</li> <!--File Access Control-->
						<li class="cd-group">Authentication</li> <!--Authentication-->
					<li title="" rel="tooltip">LDAP/AD</li> <!--LDAP/AD-->
					<li title="" rel="tooltip">SAML Shibboleth</li> <!--SAML Shibboleth-->
					<li title="" rel="tooltip">SAML ADFS</li> <!--SAML ADFS-->
					<li title="" rel="tooltip">Kerberos</li> <!--Kerberos-->
						<li class="cd-group">Storage</li> <!--Storage-->
					<li title="" rel="tooltip">File storage (local/NFS)</li> <!--File storage (local/NFS)-->
					<li title="" rel="tooltip">Object storage (S3/Swift)</li> <!--Object storage (S3/Swift)-->
					<li title="" rel="tooltip">CIFS/Windows Shares</li> <!--CIFS/Windows Shares-->
					<li title="" rel="tooltip">Sharepoint</li> <!--Sharepoint-->
					<li title="" rel="tooltip">Extensible storage</li> <!--Extensible storage-->
				</ul>
			</div> <!-- .features -->
			
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Nextcloud</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/nextcloud.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Open Source</li> <!--License-->
							<li title="The limit is customer infrastructure. There are no limits from the Nextcloud side." rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="can be hosted wherever you decide, including hybrid." rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i> <i class="fa fa-linux" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="Mail app is still a work in progress" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="both Android/iOS (Android with integrated 3rd party tool)" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="With Collabora Online" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="Coming in Nextcloud 12" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="Can be done easily from the web interface" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
							<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="Coming in Nextcloud 12" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>ownCloud</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/owncloud.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="[ownCloud Enterprise Edition] open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i> <i class="fa fa-linux" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="ownCloud touts full text search as a project done for a specific client" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="unsupported" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="unsupported" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="Unsupported. Available for iOS, Android possible with not related third party tool" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="With Collabora Online" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="only one per user" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="Only by manually changing CSS" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
							<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Box</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/box.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip">Varies per plan</li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">5GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="25-50 revisions depending on plan" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="Varies per plan" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="not natively, third party app" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="Varies per plan but mainly yes" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
							<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Citrix</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/citrix.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">10GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Branding-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Dropbox</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/dropbox.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip">Varies per plan</li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">20GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-linux" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="Max 1 month, up to 1 year with Business subscription" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="Only with business subscription" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i title="through Google Apps" rel="tooltip" class="fa fa-google" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip">very limited</li> <!--Branding-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->
					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Egnyte</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/egnyte.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip">max 10 TB</li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="Only Google Apps" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="max 3 revisions" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
							<li title="max 3 months" rel="tooltip">limited</li> <!--Full audit trail-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Google Drive</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/google.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="Only via third party app" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="max 6 months" rel="tooltip">limited	</li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip">very limited</li> <!--Branding-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Powerfolder</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/powerfolder.png" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="Only via third party app" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-usd" aria-hidden="true"></i></li> <!--Branding-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Accellion</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/accellion.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">2GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip">limited</li> <!--Full text search-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="Microsoft Lync plug-in" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="Microsoft Office 365" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i>/<i class="fa fa-times" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip">limited</li> <!--Branding-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full audit trail-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<div class="check"></div>
							<h3>Office 365</h3>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/compare/office365.svg" alt="product logo">
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li title="open source = any OSI approved license. Anything else is proprietary." rel="tooltip">Proprietary</li> <!--License-->
							<li title="" rel="tooltip">max 20K files</li> <!-- Unlimited storage -->
							<li title="" rel="tooltip">10GB</li> <!--Large file support-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Self hosted/on premise-->
								<li class="cd-group"></li> <!--Client-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-android" aria-hidden="true"></i></li> <!--Mobile Clients-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Auto upload images/video-->
							<li title="" rel="tooltip"><i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i></li> <!--Desktop clients-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!-- Sync any local folder-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--LAN Synchronization-->
							<li title="through Microsoft Apps" rel="tooltip"><i class="fa fa-clock-o" aria-hidden="true"></i></li> <!--Extensible with apps-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Outlook integration-->
								<li class="cd-group"></li> <!--Server features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Full text search-->
							<li title="Only for MS Office files" rel="tooltip">limited</li> <!--File Versioning-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--File Metadata-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--View PDF, images, video-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Audio/Video/Text chat-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Calendar/Contact/Mail integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Mobile calendar/contact integration-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Online Office-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Secure Drop (customer file upload)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Inter-server sharing-->
								<li class="cd-group"></li> <!--Admin features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Content workflow automation-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Automatic script execution-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Event notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Real-time (push) notifications-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i>/<i class="fa fa-check" aria-hidden="true"></i></li> <!--Monitoring web/API interface-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Data retention policy support-->
							<li title="Hosted only, customer has no control over when/what changes" rel="tooltip">N.A.</li> <!--Long term support (5-10 years)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Branding-->
							<li title="" rel="tooltip">limited</li> <!--Full audit trail-->
								<li class="cd-group"></li> <!--Security features-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Server side encryption-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Brute force hacking protection-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--NIST compliant password policy-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Web UI secured with CSP 3.0-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--With same-site cookies-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File Access Control-->
								<li class="cd-group"></li> <!--Authentication-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--LDAP/AD-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML Shibboleth-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--SAML ADFS-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Kerberos-->
								<li class="cd-group"></li> <!--Storage-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--File storage (local/NFS)-->
							<li title="" rel="tooltip"><i class="fa fa-times" aria-hidden="true"></i></li> <!--Object storage (S3/Swift)-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--CIFS/Windows Shares-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Sharepoint-->
							<li title="" rel="tooltip"><i class="fa fa-check" aria-hidden="true"></i></li> <!--Extensible storage-->
							</ul>
					</li> <!-- .product -->
				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
</div> <!-- container-fluid -->
</section>
<section class="disclaimer">
<div class="container">
<p>Information to our best knowledge, gathered April 28 2017. We understand the world is constantly changing, if you see we missed a feature or made a mistake, let us know. You can use <a href="/contact">our contact form.</a></p>
</div>
</section>
<!--<script>
function productsTable( element ) {
	this.element = element;
	this.table = this.element.children('.cd-products-table');
	this.productsWrapper = this.table.children('.cd-products-wrapper');
	this.tableColumns = this.productsWrapper.children('.cd-products-columns');
	this.products = this.tableColumns.children('.cd-product');
	//additional properties here
	// bind table events
	this.bindEvents();
}
 
productsTable.prototype.bindEvents = function() {
	var self = this;
	
	self.productsWrapper.on('scroll', function(){
		//detect scroll left inside products table
	});
	
	self.products.on('click', '.top-info', function(){
		//add/remove .selected class to products 
	});
	
	self.filterBtn.on('click', function(event){
		//filter products
	});
	//reset product selection
	self.resetBtn.on('click', function(event){
		//reset products visibility
	});
	
	this.navigation.on('click', 'a', function(event){
		//scroll inside products table - left/right arrows
	});
}
 
var comparisonTables = [];
$('.cd-products-comparison-table').each(function(){
	//create a productsTable object for each .cd-products-comparison-table
	comparisonTables.push(new productsTable($(this)));
});

productsTable.prototype.updateLeftScrolling = function() {
	var scrollLeft = this.productsWrapper.scrollLeft();
 
	if( this.table.hasClass('top-fixed') && checkMQ() == 'desktop') setTranformX(this.productsTopInfo, '-'+scrollLeft);
}
</script>-->
<script>
$( function()
{
    var targets = $( '[rel~=tooltip]' ),
        target  = false,
        tooltip = false,
        title   = false;
 
    targets.bind( 'mouseenter', function()
    {
        target  = $( this );
        tip     = target.attr( 'title' );
        tooltip = $( '<div id="tooltip"></div>' );
 
        if( !tip || tip == '' )
            return false;
 
        target.removeAttr( 'title' );
        tooltip.css( 'opacity', 0 )
               .html( tip )
               .appendTo( 'body' );
 
        var init_tooltip = function()
        {
            if( $( window ).width() < tooltip.outerWidth() * 1.5 )
                tooltip.css( 'max-width', $( window ).width() / 2 );
            else
                tooltip.css( 'max-width', 340 );
 
            var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
                pos_top  = target.offset().top - tooltip.outerHeight() - 20;
 
            if( pos_left < 0 )
            {
                pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                tooltip.addClass( 'left' );
            }
            else
                tooltip.removeClass( 'left' );
 
            if( pos_left + tooltip.outerWidth() > $( window ).width() )
            {
                pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                tooltip.addClass( 'right' );
            }
            else
                tooltip.removeClass( 'right' );
 
            if( pos_top < 0 )
            {
                var pos_top  = target.offset().top + target.outerHeight();
                tooltip.addClass( 'top' );
            }
            else
                tooltip.removeClass( 'top' );
 
            tooltip.css( { left: pos_left, top: pos_top } )
                   .animate( { top: '+=10', opacity: 1 }, 50 );
        };
 
        init_tooltip();
        $( window ).resize( init_tooltip );
 
        var remove_tooltip = function()
        {
            tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
            {
                $( this ).remove();
            });
 
            target.attr( 'title', tip );
        };
 
        target.bind( 'mouseleave', remove_tooltip );
        tooltip.bind( 'click', remove_tooltip );
    });
});
</script>

<script>
jQuery(document).ready(function($){
	function productsTable( element ) {
		this.element = element;
		this.table = this.element.children('.cd-products-table');
		this.tableHeight = this.table.height();
		this.productsWrapper = this.table.children('.cd-products-wrapper');
		this.tableColumns = this.productsWrapper.children('.cd-products-columns');
		this.products = this.tableColumns.children('.product');
		this.productsNumber = this.products.length;
		this.productWidth = this.products.eq(0).width();
		this.productsTopInfo = this.table.find('.top-info');
		this.featuresTopInfo = this.table.children('.features').children('.top-info');
		this.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
		this.leftScrolling = false;
		this.filterBtn = this.element.find('.filter');
		this.resetBtn = this.element.find('.reset');
		this.filtering = false,
		this.selectedproductsNumber = 0;
		this.filterActive = false;
		this.navigation = this.table.children('.cd-table-navigation');
		// bind table events
		this.bindEvents();
	}

	productsTable.prototype.bindEvents = function() {
		var self = this;
		//detect scroll left inside producst table
		self.productsWrapper.on('scroll', function(){
			if(!self.leftScrolling) {
				self.leftScrolling = true;
				(!window.requestAnimationFrame) ? setTimeout(function(){self.updateLeftScrolling();}, 250) : window.requestAnimationFrame(function(){self.updateLeftScrolling();});
			}
		});
		//select single product to filter
		self.products.on('click', '.top-info', function(){
			var product = $(this).parents('.product');
			if( !self.filtering && product.hasClass('selected') ) {
				product.removeClass('selected');
				self.selectedproductsNumber = self.selectedproductsNumber - 1;
				self.upadteFilterBtn();
			} else if( !self.filtering && !product.hasClass('selected') ) {
				product.addClass('selected');
				self.selectedproductsNumber = self.selectedproductsNumber + 1;
				self.upadteFilterBtn();
			}
		});
		//filter products
		self.filterBtn.on('click', function(event){
			event.preventDefault();
			if(self.filterActive) {
				self.filtering =  true;
				self.showSelection();
				self.filterActive = false;
				self.filterBtn.removeClass('active');
			}
		});
		//reset product selection
		self.resetBtn.on('click', function(event){
			event.preventDefault();
			if( self.filtering ) {
				self.filtering =  false;
				self.resetSelection();
			} else {
				self.products.removeClass('selected');
			}
			self.selectedproductsNumber = 0;
			self.upadteFilterBtn();
		});
		//scroll inside products table
		this.navigation.on('click', 'a', function(event){
			event.preventDefault();
			self.updateSlider( $(event.target).hasClass('next') );
		});
	}

	productsTable.prototype.upadteFilterBtn = function() {
		//show/hide filter btn
		if( this.selectedproductsNumber >= 2 ) {
			this.filterActive = true;
			this.filterBtn.addClass('active');
		} else {
			this.filterActive = false;
			this.filterBtn.removeClass('active');
		}
	}

	productsTable.prototype.updateLeftScrolling = function() {
		var totalTableWidth = parseInt(this.tableColumns.eq(0).outerWidth(true)),
			tableViewport = parseInt(this.element.width()),
			scrollLeft = this.productsWrapper.scrollLeft();

		( scrollLeft > 0 ) ? this.table.addClass('scrolling') : this.table.removeClass('scrolling');

		if( this.table.hasClass('top-fixed') && checkMQ() == 'desktop') {
			setTranformX(this.productsTopInfo, '-'+scrollLeft);
			setTranformX(this.featuresTopInfo, '0');
		}

		this.leftScrolling =  false;

		this.updateNavigationVisibility(scrollLeft);
	}

	productsTable.prototype.updateNavigationVisibility = function(scrollLeft) {
		( scrollLeft > 0 ) ? this.navigation.find('.prev').removeClass('inactive') : this.navigation.find('.prev').addClass('inactive');
		( scrollLeft < this.tableColumns.outerWidth(true) - this.productsWrapper.width() && this.tableColumns.outerWidth(true) > this.productsWrapper.width() ) ? this.navigation.find('.next').removeClass('inactive') : this.navigation.find('.next').addClass('inactive');
	}

	productsTable.prototype.updateTopScrolling = function(scrollTop) {
		var cdOffsetTop = this.table.offset().top,
			tableScrollLeft = this.productsWrapper.scrollLeft();
		
		if ( cdOffsetTop <= scrollTop && cdOffsetTop + this.tableHeight - this.topInfoHeight >= scrollTop ) {
			//fix products top-info && arrows navigation
			if( !this.table.hasClass('top-fixed') && $(document).height() > cdOffsetTop + $(window).height() + 200) { 
				this.table.addClass('top-fixed').removeClass('top-scrolling');
				if( checkMQ() == 'desktop' ) {
					this.productsTopInfo.css('top', '0');
					this.navigation.find('a').css('top', '0px');
				}
			}

		} else if( cdOffsetTop <= scrollTop ) {
			//product top-info && arrows navigation -  scroll with table
			this.table.removeClass('top-fixed').addClass('top-scrolling');
			if( checkMQ() == 'desktop' )  {
				this.productsTopInfo.css('top', (this.tableHeight - this.topInfoHeight) +'px');
				this.navigation.find('a').css('top', (this.tableHeight - this.topInfoHeight) +'px');
			}
		} else {
			//product top-info && arrows navigation -  reset style
			this.table.removeClass('top-fixed top-scrolling');
			this.productsTopInfo.attr('style', '');
			this.navigation.find('a').attr('style', '');
		}

		this.updateLeftScrolling();
	}

	productsTable.prototype.updateProperties = function() {
		this.tableHeight = this.table.height();
		this.productWidth = this.products.eq(0).width();
		this.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
		this.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
	}

	productsTable.prototype.showSelection = function() {
		this.element.addClass('filtering');
		this.filterProducts();
	}

	productsTable.prototype.resetSelection = function() {
		this.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
		this.element.removeClass('no-product-transition');
		this.resetProductsVisibility();
	}

	productsTable.prototype.filterProducts = function() {
		var self = this,
			containerOffsetLeft = self.tableColumns.offset().left,
			scrollLeft = self.productsWrapper.scrollLeft(),
			selectedProducts = this.products.filter('.selected'),
			numberProducts = selectedProducts.length;

		selectedProducts.each(function(index){
			var product = $(this),
				leftTranslate = containerOffsetLeft + index*self.productWidth + scrollLeft - product.offset().left;
			setTranformX(product, leftTranslate);
			
			if(index == numberProducts - 1 ) {
				product.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					setTimeout(function(){
						self.element.addClass('no-product-transition');
					}, 50);
					setTimeout(function(){
						self.element.addClass('filtered');
						self.productsWrapper.scrollLeft(0);
						self.tableColumns.css('width', self.productWidth*numberProducts + 'px');
						selectedProducts.attr('style', '');
						product.off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
						self.updateNavigationVisibility(0);
					}, 100);
				});
			}
		});

		if( $('.no-csstransitions').length > 0 ) {
			//browser not supporting css transitions
			self.element.addClass('filtered');
			self.productsWrapper.scrollLeft(0);
			self.tableColumns.css('width', self.productWidth*numberProducts + 'px');
			selectedProducts.attr('style', '');
			self.updateNavigationVisibility(0);
		}
	}
	
	productsTable.prototype.resetProductsVisibility = function() {
		var self = this,
			containerOffsetLeft = self.tableColumns.offset().left,
			selectedProducts = this.products.filter('.selected'),
			numberProducts = selectedProducts.length,
			scrollLeft = self.productsWrapper.scrollLeft(),
			n = 0;

		self.element.addClass('no-product-transition').removeClass('filtered');

		self.products.each(function(index){
			var product = $(this);
			if (product.hasClass('selected')) {
				n = n + 1;
				var leftTranslate = (-index + n - 1)*self.productWidth;
				setTranformX(product, leftTranslate);
			}
		});

		setTimeout(function(){
			self.element.removeClass('no-product-transition filtering');
			setTranformX(selectedProducts, '0');
			selectedProducts.removeClass('selected').attr('style', '');
		}, 50);
	}

	productsTable.prototype.updateSlider = function(bool) {
		var scrollLeft = this.productsWrapper.scrollLeft();
		scrollLeft = ( bool ) ? scrollLeft + this.productWidth : scrollLeft - this.productWidth;

		if( scrollLeft < 0 ) scrollLeft = 0;
		if( scrollLeft > this.tableColumns.outerWidth(true) - this.productsWrapper.width() ) scrollLeft = this.tableColumns.outerWidth(true) - this.productsWrapper.width();
		
		this.productsWrapper.animate( {scrollLeft: scrollLeft}, 200 );
	}

	var comparisonTables = [];
	$('.cd-products-comparison-table').each(function(){
		//create a productsTable object for each .cd-products-comparison-table
		comparisonTables.push(new productsTable($(this)));
		console.log("this.table offset "+this.productsTable); 
	});
	
	var windowScrolling = false;
	//detect window scroll - fix product top-info on scrolling
	$(window).on('scroll', function(){
		if(!windowScrolling) {
			windowScrolling = true;
			(!window.requestAnimationFrame) ? setTimeout(checkScrolling, 250) : window.requestAnimationFrame(checkScrolling);
		}
	});

// JOS: added the two lines below to get all items to show up at first page load. 
	var windowResize = true;
	(!window.requestAnimationFrame) ? setTimeout(checkResize, 250) : window.requestAnimationFrame(checkResize);

	var windowResize = false;
	//detect window resize - reset .cd-products-comparison-table properties
	$(window).on('resize', function(){
		if(!windowResize) {
			windowResize = true;
			(!window.requestAnimationFrame) ? setTimeout(checkResize, 250) : window.requestAnimationFrame(checkResize);
		}
	});
	
	function checkScrolling(){
		var scrollTop = $(window).scrollTop();
		comparisonTables.forEach(function(element){
			element.updateTopScrolling(scrollTop);
		});

		windowScrolling = false;
	}

	function checkResize(){
		comparisonTables.forEach(function(element){
			element.updateProperties();
		});

		windowResize = false;
	}

	function checkMQ() {
		//check if mobile or desktop device
		return window.getComputedStyle(comparisonTables[0].element.get(0), '::after').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}

	function setTranformX(element, value) {
		element.css({
		    '-moz-transform': 'translateX(' + value + 'px)',
		    '-webkit-transform': 'translateX(' + value + 'px)',
			'-ms-transform': 'translateX(' + value + 'px)',
			'-o-transform': 'translateX(' + value + 'px)',
			'transform': 'translateX(' + value + 'px)'
		});
	}
});
</script>
