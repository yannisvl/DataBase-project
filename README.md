# Hotel database coursework

PHP source for administrative insert/delete workflows in a hotel database: hotel groups, hotels, rooms, employees and customers. The repository also contains a relational-design document.

## Explore the source

| Files | Purpose |
| --- | --- |
| `insert_hotel_group.php`, `insert_hotel.php` | Hotel-group and hotel insertion |
| `insert_room*.php` | Multi-step room insertion |
| `insert_employee.php`, `insert_client.php` | Employee and customer insertion |
| `delete_*.php` | Deletion forms and handlers |
| `handle_adm_input.php` | Administrative input handling |
| `sxesiako.docx` | Relational-design notes |

## Running context

These files are a partial coursework application, not a self-contained deployable website. A compatible PHP/MySQL environment, the original schema and the surrounding pages/configuration must be restored before the workflows can be exercised.

Read the database connection code and form targets in each script before configuring a local environment. Use a disposable local database with example records. Do not treat the legacy database configuration or administrative endpoints as a production deployment template.

## Technical focus

The project illustrates translating a hotel domain into relational entities and implementing form-driven database operations. The committed files focus on insert/delete behavior; a complete schema bootstrap, dependency manifest and automated tests are not included.

The original source and relational notes are preserved for study and review.
