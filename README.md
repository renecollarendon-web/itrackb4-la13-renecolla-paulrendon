# ITRACKB4 - LA13

J1: Why did your search not work on page 2, and what fixed it?**
The search term was lost because the pagination links only generated the `?page=` parameter and forgot the `?search=` parameter. I fixed it by adding `->withQueryString()` to the paginator in the controller, which keeps all current GET parameters in the pagination links.

J2: What is the difference between `request()->is('movies*')` and `request()->routeIs('movies.*')`?**
`is()` checks the URL path, so it relies on text matching, which can break if URLs change. `routeIs()` checks the route name assigned in `web.php`, so it is much more stable and reliable for highlighting active navigation links.

J3: Why did you put the search in a GET form instead of POST?**
A GET form puts the search values in the URL, allowing the visitor to bookmark the search result or share the link with a classmate. A POST form is for changing data (like submitting a form), while a search is just asking a question to view data.