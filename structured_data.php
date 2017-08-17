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


<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "url": "<?= the_field('org_url','option'); ?>",
  "name": "<?= the_field('org_name','option'); ?>",
   "author": {
      "@type": "Person",
      "name": "<?= the_field('per_name','option'); ?>"
    },
  "description": "<?= the_field('org_desc','option'); ?>"
}
</script>