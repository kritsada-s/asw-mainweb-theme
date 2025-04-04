# AssetWise Website API Version 1.2

### Index

- [All Projects](#all-projects)
- [Single Project](#single-project)
- [Home Page Banner](#home-page-banner)

## All Projects
ใช้เรียกดูข้อมูลดครงการทั้งหมด รวมแนวราบ / คอนโด
### Endpoint

`GET /all-projects`

**Base URL:** `https://assetwise.co.th/wp-json/wp/v2/`

**Parameter:** `per_page` | default: -1 (all posts)

**Example:** `https://assetwise.co.th/wp-json/wp/v2/all-projects?per_page=10`

### Response

```json
[
    {
        "id": 87052,
        "title": "Atmoz De Sol",
        "slug": "atmoz-de-sol-thipphawanstation",
        "featured_image": url,
        "post_type": "condominium",
        "permalink": url,
        "project_logo": url,
        "status": "new_project"
    },
    {
        "id": 104706,
        "title": "Kave Ally Chaengwattana",
        "slug": "kave-ally-chaengwattana",
        "featured_image": false,
        "post_type": "condominium",
        "permalink": url,
        "project_logo": url,
        "status": "new_project"
    },
    ...
]
```

## Single Project

ใช้เรียกดูข้อมูลดโครงการที่มี ID ที่ต้องการ

### Endpoint

`GET /project/{projectId}/`

**Base URL:** `https://assetwise.co.th/wp-json/wp/v2/`

**Example:** `https://assetwise.co.th/wp-json/wp/v2/project/72529/`

### Response 

```json
{
  "id": 72529,
  "title": "CHANN The Riverside Boromratchachonnani",
  "slug": "chann-theriverside",
  "excerpt": "",
  "featured_image": url,
  "post_type": "house",
  "permalink": url,
  "logo": url,
  "project_status": "new_project",
  "contents": [
    {
      "layout": "banner",
      "banner_fields": {
        "desktop": url,
        "mobile": url
      }
    },
    {
      "layout": "project_information",
      "project_information_fields": {
        "e-brochure": url,
        "overall_text": "",
        "percent": "",
        "progress_listed": [
          {
            "name": "งานเสาเข็ม",
            "percent": "100"
          },
          {
            "name": "งานโครงสร้าง",
            "percent": "100"
          },
          ...
        ],
        "progress_gallery": [
          {
            "image": url,
            "caption": ""
          },
          ...
        ]
      }
    },
    {
      "layout": "gallery",
      "gallery_fields": []
    },
    {
      "layout": "plan",
      "unit_plan_fields": {
        "type": "house",
        "plan_listed": [
          {
            "type": "IVY",
            "plan_listed": [
              {
                "plan_name": "Facade",
                "plan_image": url
              }
            ]
          },
          {
            "type": "SHADOW",
            "plan_listed": [
              {
                "plan_name": "Facade",
                "plan_image": url
              }
            ]
          },
          {
            "type": "WARMTH",
            "plan_listed": [
              {
                "plan_name": "Facade",
                "plan_image": url
              }
            ]
          },
          {
            "type": "CHANN",
            "plan_listed": [
              {
                "plan_name": "Facade",
                "plan_image": url
              }
            ]
          }
        ]
      }
    },
    {
      "layout": "location",
      "location_fields": {
        "google_map": "https://maps.app.goo.gl/Zt56nFSksCawj32L8"
      }
    }
  ]
}
```

## Home Page Banner

ใช้เรียกดูข้อมูล Banner ของหน้า Home Page

### Endpoint

`GET /website-fields`

**Base URL:** `https://assetwise.co.th/wp-json/wp/v2/`

**Example:** `https://assetwise.co.th/wp-json/wp/v2/website-fields`

### Response

```json
{
    "home_banner": [
        {
            "image": "https://assetwise.co.th/wp-content/uploads/2025/02/Ad_Online_2.-Website-Mobile-520x520-1.jpg",
            "type": "promotion"
        },
        {
            "image": "https://assetwise.co.th/wp-content/uploads/2025/02/Mobile-540x540-px.jpg",
            "type": "promotion"
        }
    ]
}
```
