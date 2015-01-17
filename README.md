# Database

## Create db

```bash
echo " \
  create database wp_benchmark; \
  grant all privileges on wp_benchmark.* to \
  wp_benchmark@localhost identified by 'wp_benchmark'; " \
  |  mysql -u root -p
```

## Generate dummy content

```fish
for l in 'en' 'nl'; \
    set lorem (curl http://www.loripsum.net/api/4); \
    for i in (seq 20); \
        set postid (wp post create --post_type=employee --post_status=publish --post_title="Employee $i" --porcelain --post_content="$lorem"); \
        wp post meta add $postid 'lastname' 'Achternaam'; \
        wp post meta add $postid '_lastname' 'field_54b51cee83fab'; \
        wp post meta add $postid 'firstname' 'Voornaam'; \
        wp post meta add $postid '_firstname' 'field_54b51ce483faa'; \
        echo update wp_benchmark.wp_icl_translations set language_code=\'$l\' where element_id=\'$postid\' | mysql -uwp_benchmark -pwp_benchmark; \
    end; \
    set lorem (curl http://www.loripsum.net/api/6); \
    for i in (seq 15); \
        set postid (wp post create --post_type=project --post_status=publish --post_title="Project $i" --porcelain --post_content="$lorem"); \
        wp post meta add $postid 'url' 'http://dummy.url'; \
        wp post meta add $postid '_url' 'field_54b51beb10944'; \
        wp post meta add $postid 'customer' 'Klant'; \
        wp post meta add $postid '_customer' 'field_54b51c9f10945'; \
        echo update wp_benchmark.wp_icl_translations set language_code=\'$l\' where element_id=\'$postid\' | mysql -uwp_benchmark -pwp_benchmark; \
    end; \
end
```
