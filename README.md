# Create database

```
echo " \
  create database wp_benchmark; \
  grant all privileges on wp_benchmark.* to \
  wp_benchmark@localhost identified by 'wp_benchmark'; " \
  |  mysql -u root -p
```
