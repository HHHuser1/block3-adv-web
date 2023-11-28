


BRAND TABLE
| BrandID | BrandName   |
|---------|-------------|
| 1       | Intel       |
| 2       | AMD         |
| 3       | NVIDIA      |
| 4       | Corsair     |
| 5       | Kingston    |
| 6       | ASUS        |
| 7       | Gigabyte    |
| 8       | Samsung     |


PartType TABLE:
| PartTypeID | TypeName       |
|------------|----------------|
| 1          | CPU            |
| 2          | GPU            |
| 3          | RAM            |
| 4          | Storage        |
| 5          | Motherboard    |
| 6          | Power Supply   |
| 7          | Cooling System |



Part TABLE 
| PartID | PartName                 | PartTypeID | BrandID | Price | Compatibility       |
|--------|--------------------------|------------|---------|-------|----------------------|
| 1      | Intel Core i9-11900K     | 1          | 1       | 600   | Intel compatible     |
| 2      | AMD Ryzen 9 5900X         | 1          | 2       | 550   | AMD compatible       |
| 3      | NVIDIA RTX 3080           | 2          | 3       | 800   |                      |
| 4      | Corsair Vengeance RGB     | 3          | 4       | 150   |                      |
| 5      | Kingston HyperX Fury     | 3          | 5       | 100   |                      |
| 6      | ASUS ROG Strix Z590-E     | 5          | 6       | 300   | Intel compatible     |
| 7      | Gigabyte B550 AORUS Pro  | 5          | 7       | 200   | AMD compatible       |
| 8      | Samsung 970 EVO 1TB NVMe  | 4          | 8       | 180   |                      |
| 9      | Corsair RM850x           | 6          | 4       | 120   |                      |
| 10     | Corsair Hydro Series H100i | 7        | 4       | 120   |                      |



System build TABLE
| BuildID | BuildName               |
|---------|-------------------------|
| 301     | Gaming Beast PC         |
| 302     | Productivity Workstation|
| 303     | Budget Gaming PC        |
| 304     | Home Theater PC         |
| 305     | Compact Mini PC         |



BuildPart TABLE:
| BuildPartID | BuildID | PartID |
|-------------|---------|--------|
| 14          | 301     | 1      |
| 15          | 301     | 3      |
| 16          | 301     | 6      |
| 17          | 301     | 8      |
| 18          | 302     | 2      |
| 19          | 302     | 5      |
| 20          | 302     | 6      |
| 21          | 302     | 7      |
| 22          | 303     | 2      |
| 23          | 303     | 5      |
| 24          | 303     | 7      |
| 25          | 303     | 9      |
| 26          | 304     | 6      |
| 27          | 304     | 8      |
| 28          | 305     | 10     |

