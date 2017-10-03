<?php if ( get_field('org_name','option') ): ?>
    <script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "legalName" : "<?= the_field('org_name','option'); ?>",
  "url" : "<?= the_field('org_url','option'); ?>",
  "contactPoint" : [{
    "@type" : "ContactPoint",
    "telephone" : "<?= the_field('org_contact_num','option'); ?>",
    "contactType" : "<?= the_field('org_contact_name','option'); ?>"
  }],
  "logo" : "<?= the_field('org_logo','option'); ?>",
  "sameAs" : [
    "<?= the_field('facebook_url','option'); ?>",
    "<?= the_field('instagram_url','option'); ?>",
    "<?= the_field('twitter_url','option'); ?>",
    "<?= the_field('youtube_url','option'); ?>"
    ]
}
</script>
<? endif; ?>

<?php if ( get_field('per_name','option') ): ?>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Person",
      "email": "mailto:<?= the_field('org_email','option'); ?>",
      "image": "<?= the_field('org_logo','option'); ?>",
      "jobTitle": "<?= the_field('per_title','option'); ?>",
      "name": "<?= the_field('per_name','option'); ?>",
      "birthPlace": "<?= the_field('per_from','option'); ?>",
      "telephone": "<?= the_field('org_contact_num','option'); ?>",
      "url": "<?= the_field('org_url','option'); ?>",
	    "sameAs" : [
        "<?= the_field('facebook_url','option'); ?>",
        "<?= the_field('instagram_url','option'); ?>",
        "<?= the_field('twitter_url','option'); ?>",
        "<?= the_field('youtube_url','option'); ?>"
        ]
    }
</script>
<? endif; ?>

<?php if ( get_field('org_name','option') ): ?>
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "<?= the_field('org_url','option'); ?>",
  "name": "<?= the_field('org_name','option'); ?>",
  "description": "<?= the_field('org_desc','option'); ?>"
}
</script>
<? endif; ?>

<?php if ( get_field('event_name','option') ): ?>
    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Event",
  "name": "<?= the_field('event_name','option'); ?>",
  "startDate": "<?= the_field('event_start_date','option'); ?>",
  "location": {
    "@type": "Place",
    "name": "<?= the_field('event_location','option'); ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?= the_field('event_address','option'); ?>",
      "addressLocality": "<?= the_field('event_city','option'); ?>",
      "postalCode": "<?= the_field('event_zip','option'); ?>",
      "addressRegion": "<?= the_field('event_state','option'); ?>",
      "addressCountry": "US"
    }
  },
  "image": "<?= the_field('event_image','option'); ?>",
  "description": "<?= the_field('event_description','option'); ?>",
  "endDate": "<?= the_field('event_end_date','option'); ?>",
  "offers": {
    "@type": "Offer",
    "url": "<?= the_field('event_ticket_link','option'); ?>",
    "price": "<?= the_field('event_ticket_price','option'); ?>",
    "priceCurrency": "USD",
    "availability": "http://schema.org/InStock"
  }
}
</script>
<? endif; ?>