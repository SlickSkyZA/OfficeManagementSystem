<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setRoutes(
    unserialize(base64_decode('TzozNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlQ29sbGVjdGlvbiI6NDp7czo5OiIAKgByb3V0ZXMiO2E6Mzp7czozOiJHRVQiO2E6MjM6e3M6NDoiaG9tZSI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjo4OntzOjY6IgAqAHVyaSI7czo0OiJob21lIjtzOjEwOiIAKgBtZXRob2RzIjthOjI6e2k6MDtzOjM6IkdFVCI7aToxO3M6NDoiSEVBRCI7fXM6OToiACoAYWN0aW9uIjthOjU6e3M6NDoidXNlcyI7czo0MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAaW5kZXgiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGluZGV4IjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEzOiIAKgBjb250cm9sbGVyIjtOO3M6MTE6IgAqAGRlZmF1bHRzIjthOjA6e31zOjk6IgAqAHdoZXJlcyI7YTowOnt9czoxMzoiACoAcGFyYW1ldGVycyI7TjtzOjE3OiIAKgBwYXJhbWV0ZXJOYW1lcyI7Tjt9czoxOiIvIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjE6Ii8iO3M6MTA6IgAqAG1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo5OiIAKgBhY3Rpb24iO2E6NTp7czo0OiJ1c2VzIjtzOjQxOiJBcHBcSHR0cFxDb250cm9sbGVyc1xNYWluQ29udHJvbGxlckBpbmRleCI7czoxMDoiY29udHJvbGxlciI7czo0MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcTWFpbkNvbnRyb2xsZXJAaW5kZXgiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTM6IgAqAGNvbnRyb2xsZXIiO047czoxMToiACoAZGVmYXVsdHMiO2E6MDp7fXM6OToiACoAd2hlcmVzIjthOjA6e31zOjEzOiIAKgBwYXJhbWV0ZXJzIjtOO3M6MTc6IgAqAHBhcmFtZXRlck5hbWVzIjtOO31zOjY6ImxvZ291dCI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjo4OntzOjY6IgAqAHVyaSI7czo2OiJsb2dvdXQiO3M6MTA6IgAqAG1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo5OiIAKgBhY3Rpb24iO2E6NTp7czo0OiJ1c2VzIjtzOjQyOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBsb2dvdXQiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGxvZ291dCI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMzoiACoAY29udHJvbGxlciI7TjtzOjExOiIAKgBkZWZhdWx0cyI7YTowOnt9czo5OiIAKgB3aGVyZXMiO2E6MDp7fXM6MTM6IgAqAHBhcmFtZXRlcnMiO047czoxNzoiACoAcGFyYW1ldGVyTmFtZXMiO047fXM6OToiZGFzaGJvYXJkIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjk6ImRhc2hib2FyZCI7czoxMDoiACoAbWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NDU6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGRhc2hib2FyZCI7czoxMDoiY29udHJvbGxlciI7czo0NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAZGFzaGJvYXJkIjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEzOiIAKgBjb250cm9sbGVyIjtOO3M6MTE6IgAqAGRlZmF1bHRzIjthOjA6e31zOjk6IgAqAHdoZXJlcyI7YTowOnt9czoxMzoiACoAcGFyYW1ldGVycyI7TjtzOjE3OiIAKgBwYXJhbWV0ZXJOYW1lcyI7Tjt9czo1OiJ1c2VycyI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjo4OntzOjY6IgAqAHVyaSI7czo1OiJ1c2VycyI7czoxMDoiACoAbWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQHVzZXJzIjtzOjEwOiJjb250cm9sbGVyIjtzOjQxOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckB1c2VycyI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMzoiACoAY29udHJvbGxlciI7TjtzOjExOiIAKgBkZWZhdWx0cyI7YTowOnt9czo5OiIAKgB3aGVyZXMiO2E6MDp7fXM6MTM6IgAqAHBhcmFtZXRlcnMiO047czoxNzoiACoAcGFyYW1ldGVyTmFtZXMiO047fXM6NjoicmVwb3J0IjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjY6InJlcG9ydCI7czoxMDoiACoAbWV0aG9kcyI7YToyOntpOjA7czozOiJHRVQiO2k6MTtzOjQ6IkhFQUQiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NDI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQHJlcG9ydCI7czoxMDoiY29udHJvbGxlciI7czo0MjoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAcmVwb3J0IjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEzOiIAKgBjb250cm9sbGVyIjtOO3M6MTE6IgAqAGRlZmF1bHRzIjthOjA6e31zOjk6IgAqAHdoZXJlcyI7YTowOnt9czoxMzoiACoAcGFyYW1ldGVycyI7TjtzOjE3OiIAKgBwYXJhbWV0ZXJOYW1lcyI7Tjt9czo5OiJicm9hZGNhc3QiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6ODp7czo2OiIAKgB1cmkiO3M6OToiYnJvYWRjYXN0IjtzOjEwOiIAKgBtZXRob2RzIjthOjI6e2k6MDtzOjM6IkdFVCI7aToxO3M6NDoiSEVBRCI7fXM6OToiACoAYWN0aW9uIjthOjU6e3M6NDoidXNlcyI7czo0NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAYnJvYWRjYXN0IjtzOjEwOiJjb250cm9sbGVyIjtzOjQ1OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBicm9hZGNhc3QiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTM6IgAqAGNvbnRyb2xsZXIiO047czoxMToiACoAZGVmYXVsdHMiO2E6MDp7fXM6OToiACoAd2hlcmVzIjthOjA6e31zOjEzOiIAKgBwYXJhbWV0ZXJzIjtOO3M6MTc6IgAqAHBhcmFtZXRlck5hbWVzIjtOO31zOjExOiJub3RpY2Uve2lkfSI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjo4OntzOjY6IgAqAHVyaSI7czoxMToibm90aWNlL3tpZH0iO3M6MTA6IgAqAG1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo5OiIAKgBhY3Rpb24iO2E6NTp7czo0OiJ1c2VzIjtzOjQyOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBub3RpY2UiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQG5vdGljZSI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMzoiACoAY29udHJvbGxlciI7TjtzOjExOiIAKgBkZWZhdWx0cyI7YTowOnt9czo5OiIAKgB3aGVyZXMiO2E6MDp7fXM6MTM6IgAqAHBhcmFtZXRlcnMiO047czoxNzoiACoAcGFyYW1ldGVyTmFtZXMiO047fXM6MTM6Im5vdGljZWhpc3RvcnkiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6ODp7czo2OiIAKgB1cmkiO3M6MTM6Im5vdGljZWhpc3RvcnkiO3M6MTA6IgAqAG1ldGhvZHMiO2E6Mjp7aTowO3M6MzoiR0VUIjtpOjE7czo0OiJIRUFEIjt9czo5OiIAKgBhY3Rpb24iO2E6NTp7czo0OiJ1c2VzIjtzOjQ5OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBub3RpY2VoaXN0b3J5IjtzOjEwOiJjb250cm9sbGVyIjtzOjQ5OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBub3RpY2VoaXN0b3J5IjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEzOiIAKgBjb250cm9sbGVyIjtOO3M6MTE6IgAqAGRlZmF1bHRzIjthOjA6e31zOjk6IgAqAHdoZXJlcyI7YTowOnt9czoxMzoiACoAcGFyYW1ldGVycyI7TjtzOjE3OiIAKgBwYXJhbWV0ZXJOYW1lcyI7Tjt9czoxNzoiZGVsZXRlbm90aWNlL3tpZH0iO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6ODp7czo2OiIAKgB1cmkiO3M6MTc6ImRlbGV0ZW5vdGlj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ZXMiO3M6NDU6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQG1ha2VsZWF2ZSI7czoxMDoiY29udHJvbGxlciI7czo0NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAbWFrZWxlYXZlIjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEzOiIAKgBjb250cm9sbGVyIjtOO3M6MTE6IgAqAGRlZmF1bHRzIjthOjA6e31zOjk6IgAqAHdoZXJlcyI7YTowOnt9czoxMzoiACoAcGFyYW1ldGVycyI7TjtzOjE3OiIAKgBwYXJhbWV0ZXJOYW1lcyI7Tjt9czoxMToiZWRpdHByb2Nlc3MiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6ODp7czo2OiIAKgB1cmkiO3M6MTE6ImVkaXRwcm9jZXNzIjtzOjEwOiIAKgBtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NDc6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGVkaXRwcm9jZXNzIjtzOjEwOiJjb250cm9sbGVyIjtzOjQ3OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBlZGl0cHJvY2VzcyI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMzoiACoAY29udHJvbGxlciI7TjtzOjExOiIAKgBkZWZhdWx0cyI7YTowOnt9czo5OiIAKgB3aGVyZXMiO2E6MDp7fXM6MTM6IgAqAHBhcmFtZXRlcnMiO047czoxNzoiACoAcGFyYW1ldGVyTmFtZXMiO047fXM6MTQ6ImNoYW5nZXBhc3N3b3JkIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjE0OiJjaGFuZ2VwYXNzd29yZCI7czoxMDoiACoAbWV0aG9kcyI7YToxOntpOjA7czo0OiJQT1NUIjt9czo5OiIAKgBhY3Rpb24iO2E6NTp7czo0OiJ1c2VzIjtzOjUwOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBjaGFuZ2VQYXNzd29yZCI7czoxMDoiY29udHJvbGxlciI7czo1MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAY2hhbmdlUGFzc3dvcmQiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTM6IgAqAGNvbnRyb2xsZXIiO047czoxMToiACoAZGVmYXVsdHMiO2E6MDp7fXM6OToiACoAd2hlcmVzIjthOjA6e31zOjEzOiIAKgBwYXJhbWV0ZXJzIjtOO3M6MTc6IgAqAHBhcmFtZXRlck5hbWVzIjtOO31zOjE0OiJtYWtlYXR0ZW5kYW5jZSI7TzoyNDoiSWxsdW1pbmF0ZVxSb3V0aW5nXFJvdXRlIjo4OntzOjY6IgAqAHVyaSI7czoxNDoibWFrZWF0dGVuZGFuY2UiO3M6MTA6IgAqAG1ldGhvZHMiO2E6MTp7aTowO3M6NDoiUE9TVCI7fXM6OToiACoAYWN0aW9uIjthOjU6e3M6NDoidXNlcyI7czo1MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAbWFrZUF0dGVuZGFuY2UiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NTA6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQG1ha2VBdHRlbmRhbmNlIjtzOjk6Im5hbWVzcGFjZSI7czoyMDoiQXBwXEh0dHBcQ29udHJvbGxlcnMiO3M6NjoicHJlZml4IjtOO3M6NToid2hlcmUiO2E6MDp7fX1zOjEzOiIAKgBjb250cm9sbGVyIjtOO3M6MTE6IgAqAGRlZmF1bHRzIjthOjA6e31zOjk6IgAqAHdoZXJlcyI7YTowOnt9czoxMzoiACoAcGFyYW1ldGVycyI7TjtzOjE3OiIAKgBwYXJhbWV0ZXJOYW1lcyI7Tjt9czoxNDoidmlld2F0dGVuZGFuY2UiO086MjQ6IklsbHVtaW5hdGVcUm91dGluZ1xSb3V0ZSI6ODp7czo2OiIAKgB1cmkiO3M6MTQ6InZpZXdhdHRlbmRhbmNlIjtzOjEwOiIAKgBtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NTA6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQHZpZXdBdHRlbmRhbmNlIjtzOjEwOiJjb250cm9sbGVyIjtzOjUwOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckB2aWV3QXR0ZW5kYW5jZSI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMzoiACoAY29udHJvbGxlciI7TjtzOjExOiIAKgBkZWZhdWx0cyI7YTowOnt9czo5OiIAKgB3aGVyZXMiO2E6MDp7fXM6MTM6IgAqAHBhcmFtZXRlcnMiO047czoxNzoiACoAcGFyYW1ldGVyTmFtZXMiO047fXM6MTc6InZpZXdlbXBhdHRlbmRhbmNlIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjE3OiJ2aWV3ZW1wYXR0ZW5kYW5jZSI7czoxMDoiACoAbWV0aG9kcyI7YToxOntpOjA7czo0OiJQT1NUIjt9czo5OiIAKgBhY3Rpb24iO2E6NTp7czo0OiJ1c2VzIjtzOjUzOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckB2aWV3RW1wQXR0ZW5kYW5jZSI7czoxMDoiY29udHJvbGxlciI7czo1MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAdmlld0VtcEF0dGVuZGFuY2UiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTM6IgAqAGNvbnRyb2xsZXIiO047czoxMToiACoAZGVmYXVsdHMiO2E6MDp7fXM6OToiACoAd2hlcmVzIjthOjA6e31zOjEzOiIAKgBwYXJhbWV0ZXJzIjtOO3M6MTc6IgAqAHBhcmFtZXRlck5hbWVzIjtOO31zOjEwOiJhc3NpZ250YXNrIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjEwOiJhc3NpZ250YXNrIjtzOjEwOiIAKgBtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NDY6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGFzc2lnbnRhc2siO3M6MTA6ImNvbnRyb2xsZXIiO3M6NDY6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGFzc2lnbnRhc2siO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTM6IgAqAGNvbnRyb2xsZXIiO047czoxMToiACoAZGVmYXVsdHMiO2E6MDp7fXM6OToiACoAd2hlcmVzIjthOjA6e31zOjEzOiIAKgBwYXJhbWV0ZXJzIjtOO3M6MTc6IgAqAHBhcmFtZXRlck5hbWVzIjtOO31zOjE2OiJicm9hZGNhc3Rwcm9jZXNzIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjE2OiJicm9hZGNhc3Rwcm9jZXNzIjtzOjEwOiIAKgBtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NTI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGJyb2FkY2FzdHByb2Nlc3MiO3M6MTA6ImNvbnRyb2xsZXIiO3M6NTI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGJyb2FkY2FzdHByb2Nlc3MiO3M6OToibmFtZXNwYWNlIjtzOjIwOiJBcHBcSHR0cFxDb250cm9sbGVycyI7czo2OiJwcmVmaXgiO047czo1OiJ3aGVyZSI7YTowOnt9fXM6MTM6IgAqAGNvbnRyb2xsZXIiO047czoxMToiACoAZGVmYXVsdHMiO2E6MDp7fXM6OToiACoAd2hlcmVzIjthOjA6e31zOjEzOiIAKgBwYXJhbWV0ZXJzIjtOO3M6MTc6IgAqAHBhcmFtZXRlck5hbWVzIjtOO31zOjg6ImFkZHVzZXJzIjtPOjI0OiJJbGx1bWluYXRlXFJvdXRpbmdcUm91dGUiOjg6e3M6NjoiACoAdXJpIjtzOjg6ImFkZHVzZXJzIjtzOjEwOiIAKgBtZXRob2RzIjthOjE6e2k6MDtzOjQ6IlBPU1QiO31zOjk6IgAqAGFjdGlvbiI7YTo1OntzOjQ6InVzZXMiO3M6NDQ6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGFkZHVzZXJzIjtzOjEwOiJjb250cm9sbGVyIjtzOjQ0OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBhZGR1c2VycyI7czo5OiJuYW1lc3BhY2UiO3M6MjA6IkFwcFxIdHRwXENvbnRyb2xsZXJzIjtzOjY6InByZWZpeCI7TjtzOjU6IndoZXJlIjthOjA6e319czoxMzoiACoAY29udHJvbGxlciI7TjtzOjExOiIAKgBkZWZhdWx0cyI7YTowOnt9czo5OiIAKgB3aGVyZXMiO2E6MDp7fXM6MTM6IgAqAHBhcmFtZXRlcnMiO047czoxNzoiACoAcGFyYW1ldGVyTmFtZXMiO047fX19czoxMjoiACoAYWxsUm91dGVzIjthOjM1OntzOjg6IkhFQURob21lIjtyOjQ7czo1OiJIRUFELyI7cjoyMDtzOjE2OiJQT1NUbG9naW5wcm9jZXNzIjtyOjM5NztzOjEwOiJIRUFEbG9nb3V0IjtyOjM2O3M6MTM6IkhFQURkYXNoYm9hcmQiO3I6NTI7czo5OiJIRUFEdXNlcnMiO3I6Njg7czoxMDoiSEVBRHJlcG9ydCI7cjo4NDtzOjE0OiJQT1NUdmlld3JlcG9ydCI7cjo0MTI7czoxMzoiSEVBRGJyb2FkY2FzdCI7cjoxMDA7czoxNToiSEVBRG5vdGljZS97aWR9IjtyOjExNjtzOjE3OiJIRUFEbm90aWNlaGlzdG9yeSI7cjoxMzI7czoyMToiSEVBRGRlbGV0ZW5vdGljZS97aWR9IjtyOjE0ODtzOjk6IkhFQUR0YXNrcyI7cjoxNjQ7czoxMzoiSEVBRGNvbXBsYWludCI7cjoxODA7czoyMDoiUE9TVHByb2Nlc3Njb21wbGFpbnQiO3I6NDI3O3M6MjQ6IkhFQURkZWxldGVjb21wbGFpbnQve2lkfSI7cjoxOTY7czoyMjoiSEVBRHZpZXdjb21wbGFpbnQve2lkfSI7cjoyMTI7czo5OiJIRUFEbGVhdmUiO3I6MjI4O3M6MTM6IlBPU1RtYWtlbGVhdmUiO3I6NDQyO3M6MTU6IkhFQURlZGl0cHJvZmlsZSI7cjoyNDQ7czoxNToiUE9TVGVkaXRwcm9jZXNzIjtyOjQ1NztzOjE4OiJQT1NUY2hhbmdlcGFzc3dvcmQiO3I6NDcyO3M6MTQ6IkhFQURhdHRlbmRhbmNlIjtyOjI2MDtzOjE4OiJQT1NUbWFrZWF0dGVuZGFuY2UiO3I6NDg3O3M6MTg6IlBPU1R2aWV3YXR0ZW5kYW5jZSI7cjo1MDI7czoyMToiUE9TVHZpZXdlbXBhdHRlbmRhbmNlIjtyOjUxNztzOjE0OiJQT1NUYXNzaWdudGFzayI7cjo1MzI7czoxOToiSEVBRGRlbGV0ZXRhc2sve2lkfSI7cjoyNzY7czoyMDoiUE9TVGJyb2FkY2FzdHByb2Nlc3MiO3I6NTQ3O3M6MTI6IlBPU1RhZGR1c2VycyI7cjo1NjI7czoxNzoiSEVBRGVkaXR1c2VyL3tpZH0iO3I6MjkyO3M6MTk6IkhFQURkZWxldGV1c2VyL3tpZH0iO3I6MzA4O3M6NToiSEVBRGEiO3I6MzI0O3M6NToiSEVBRGIiO3I6MzQwO3M6MTQ6IkhFQUR7dXNlcm5hbWV9IjtyOjM1Njt9czoxMToiACoAbmFtZUxpc3QiO2E6MDp7fXM6MTM6IgAqAGFjdGlvbkxpc3QiO2E6MzU6e3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGluZGV4IjtyOjQ7czo0MToiQXBwXEh0dHBcQ29udHJvbGxlcnNcTWFpbkNvbnRyb2xsZXJAaW5kZXgiO3I6MjA7czo0ODoiQXBwXEh0dHBcQ29udHJvbGxlcnNcTWFpbkNvbnRyb2xsZXJAbG9naW5wcm9jZXNzIjtyOjM5NztzOjQyOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBsb2dvdXQiO3I6MzY7czo0NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAZGFzaGJvYXJkIjtyOjUyO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQHVzZXJzIjtyOjY4O3M6NDI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQHJlcG9ydCI7cjo4NDtzOjQ2OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckB2aWV3cmVwb3J0IjtyOjQxMjtzOjQ1OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBicm9hZGNhc3QiO3I6MTAwO3M6NDI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQG5vdGljZSI7cjoxMTY7czo0OToiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAbm90aWNlaGlzdG9yeSI7cjoxMzI7czo0ODoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAZGVsZXRlbm90aWNlIjtyOjE0ODtzOjQxOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckB0YXNrcyI7cjoxNjQ7czo0NToiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAY29tcGxhaW50IjtyOjE4MDtzOjUyOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBwcm9jZXNzY29tcGxhaW50IjtyOjQyNztzOjUxOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBkZWxldGVjb21wbGFpbnQiO3I6MTk2O3M6NDk6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQHZpZXdjb21wbGFpbnQiO3I6MjEyO3M6NDE6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGxlYXZlIjtyOjIyODtzOjQ1OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBtYWtlbGVhdmUiO3I6NDQyO3M6NDc6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGVkaXRwcm9maWxlIjtyOjI0NDtzOjQ3OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBlZGl0cHJvY2VzcyI7cjo0NTc7czo1MDoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAY2hhbmdlUGFzc3dvcmQiO3I6NDcyO3M6NDY6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGF0dGVuZGFuY2UiO3I6MjYwO3M6NTA6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQG1ha2VBdHRlbmRhbmNlIjtyOjQ4NztzOjUwOiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckB2aWV3QXR0ZW5kYW5jZSI7cjo1MDI7czo1MzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAdmlld0VtcEF0dGVuZGFuY2UiO3I6NTE3O3M6NDY6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGFzc2lnbnRhc2siO3I6NTMyO3M6NDY6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGRlbGV0ZXRhc2siO3I6Mjc2O3M6NTI6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGJyb2FkY2FzdHByb2Nlc3MiO3I6NTQ3O3M6NDQ6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQGFkZHVzZXJzIjtyOjU2MjtzOjQ0OiJBcHBcSHR0cFxDb250cm9sbGVyc1xIb21lQ29udHJvbGxlckBlZGl0dXNlciI7cjoyOTI7czo0NjoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAZGVsZXRldXNlciI7cjozMDg7czo0NjoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAYWpheF91c2VycyI7cjozMjQ7czo0NzoiQXBwXEh0dHBcQ29udHJvbGxlcnNcSG9tZUNvbnRyb2xsZXJAc2VsZWN0X3VzZXIiO3I6MzQwO3M6NDM6IkFwcFxIdHRwXENvbnRyb2xsZXJzXEhvbWVDb250cm9sbGVyQHByb2ZpbGUiO3I6MzU2O319'))
);