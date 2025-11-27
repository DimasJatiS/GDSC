<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-oauth2-callback">
                                <a href="#endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-menu">
                                <a href="#endpoints-POSTapi-menu">POST api/menu</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-menu">
                                <a href="#endpoints-GETapi-menu">GET api/menu</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-menu-search">
                                <a href="#endpoints-GETapi-menu-search">GET api/menu/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-menu-group-by-category">
                                <a href="#endpoints-GETapi-menu-group-by-category">GET api/menu/group-by-category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-menu--id-">
                                <a href="#endpoints-GETapi-menu--id-">GET api/menu/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-menu--id-">
                                <a href="#endpoints-PUTapi-menu--id-">PUT api/menu/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-menu--id-">
                                <a href="#endpoints-DELETEapi-menu--id-">DELETE api/menu/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: November 27, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-documentation">Handles the API request and renders the Swagger documentation view.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-oauth2-callback">Handles the OAuth2 callback and retrieves the required file for the redirect.</h2>

<p>
</p>



<span id="example-requests-GETapi-oauth2-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/oauth2-callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/oauth2-callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-oauth2-callback">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
&lt;body&gt;
&lt;script src=&quot;oauth2-redirect.js&quot;&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-oauth2-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-oauth2-callback" data-method="GET"
      data-path="api/oauth2-callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-oauth2-callback"
                    onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-oauth2-callback"
                    onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-oauth2-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/oauth2-callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-oauth2-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-menu">POST api/menu</h2>

<p>
</p>



<span id="example-requests-POSTapi-menu">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/menu" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"category\": \"architecto\",
    \"calories\": 4326.41688,
    \"price\": 4326.41688,
    \"ingredients\": [],
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/menu"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "category": "architecto",
    "calories": 4326.41688,
    "price": 4326.41688,
    "ingredients": [],
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-menu">
</span>
<span id="execution-results-POSTapi-menu" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-menu"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-menu"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-menu" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-menu">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-menu" data-method="POST"
      data-path="api/menu"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-menu', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-menu"
                    onclick="tryItOut('POSTapi-menu');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-menu"
                    onclick="cancelTryOut('POSTapi-menu');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-menu"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/menu</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-menu"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-menu"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-menu"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="POSTapi-menu"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>calories</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="calories"                data-endpoint="POSTapi-menu"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-menu"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ingredients</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ingredients"                data-endpoint="POSTapi-menu"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-menu"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-menu">GET api/menu</h2>

<p>
</p>



<span id="example-requests-GETapi-menu">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/menu" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/menu"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: &quot;A sweet and creamy coffee drink with the rich flavor of caramel.&quot;,
            &quot;ai_calories&quot;: 250,
            &quot;ai_category&quot;: &quot;drinks&quot;,
            &quot;ai_recipe_steps&quot;: [
                &quot;Brew a shot of espresso or strong coffee.&quot;,
                &quot;Steam or froth milk.&quot;,
                &quot;Add caramel syrup to the milk and stir.&quot;,
                &quot;Pour the coffee into a mug.&quot;,
                &quot;Pour the caramel milk over the coffee.&quot;,
                &quot;Top with additional caramel drizzle if desired.&quot;
            ],
            &quot;created_at&quot;: &quot;2025-11-23T05:20:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:20:55.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: &quot;A sweet and creamy coffee drink with the rich flavor of caramel.&quot;,
            &quot;ai_calories&quot;: 250,
            &quot;ai_category&quot;: &quot;drinks&quot;,
            &quot;ai_recipe_steps&quot;: [
                &quot;Brew espresso or strong coffee.&quot;,
                &quot;Steam milk until frothy.&quot;,
                &quot;Add caramel syrup to a mug.&quot;,
                &quot;Pour the espresso or coffee over the caramel syrup.&quot;,
                &quot;Pour the steamed milk over the coffee, holding back the foam with a spoon.&quot;,
                &quot;Spoon the foam over the top.&quot;,
                &quot;Drizzle with additional caramel syrup, if desired.&quot;,
                &quot;Serve immediately.&quot;
            ],
            &quot;created_at&quot;: &quot;2025-11-23T05:15:59.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:16:01.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:11:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:11:45.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:11:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:11:24.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:06:21.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:06:21.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:05:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:05:40.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Es Kopi Susu&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;coffee&quot;,
                &quot;milk&quot;,
                &quot;ice&quot;,
                &quot;sugar&quot;
            ],
            &quot;description&quot;: &quot;Classic iced coffee with milk&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T04:50:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T04:50:18.000000Z&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Es Kopi Susu&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;coffee&quot;,
                &quot;milk&quot;,
                &quot;ice&quot;,
                &quot;sugar&quot;
            ],
            &quot;description&quot;: &quot;Classic iced coffee with milk&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T03:59:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T03:59:11.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/menu?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/menu?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/menu?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/menu&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 8,
        &quot;total&quot;: 8
    },
    &quot;pagination&quot;: {
        &quot;total&quot;: 8,
        &quot;page&quot;: 1,
        &quot;per_page&quot;: 10,
        &quot;total_pages&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-menu" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-menu" data-method="GET"
      data-path="api/menu"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu"
                    onclick="tryItOut('GETapi-menu');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu"
                    onclick="cancelTryOut('GETapi-menu');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-menu"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-menu"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-menu-search">GET api/menu/search</h2>

<p>
</p>



<span id="example-requests-GETapi-menu-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/menu/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/menu/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu-search">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Es Kopi Susu&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;coffee&quot;,
                &quot;milk&quot;,
                &quot;ice&quot;,
                &quot;sugar&quot;
            ],
            &quot;description&quot;: &quot;Classic iced coffee with milk&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T03:59:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T03:59:11.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Es Kopi Susu&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;coffee&quot;,
                &quot;milk&quot;,
                &quot;ice&quot;,
                &quot;sugar&quot;
            ],
            &quot;description&quot;: &quot;Classic iced coffee with milk&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T04:50:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T04:50:18.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:05:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:05:40.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:06:21.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:06:21.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:11:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:11:24.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: null,
            &quot;ai_calories&quot;: null,
            &quot;ai_category&quot;: null,
            &quot;ai_recipe_steps&quot;: null,
            &quot;created_at&quot;: &quot;2025-11-23T05:11:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:11:45.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: &quot;A sweet and creamy coffee drink with the rich flavor of caramel.&quot;,
            &quot;ai_calories&quot;: 250,
            &quot;ai_category&quot;: &quot;drinks&quot;,
            &quot;ai_recipe_steps&quot;: [
                &quot;Brew espresso or strong coffee.&quot;,
                &quot;Steam milk until frothy.&quot;,
                &quot;Add caramel syrup to a mug.&quot;,
                &quot;Pour the espresso or coffee over the caramel syrup.&quot;,
                &quot;Pour the steamed milk over the coffee, holding back the foam with a spoon.&quot;,
                &quot;Spoon the foam over the top.&quot;,
                &quot;Drizzle with additional caramel syrup, if desired.&quot;,
                &quot;Serve immediately.&quot;
            ],
            &quot;created_at&quot;: &quot;2025-11-23T05:15:59.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:16:01.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Caramel Latte&quot;,
            &quot;category&quot;: &quot;drinks&quot;,
            &quot;calories&quot;: 180,
            &quot;price&quot;: 25000,
            &quot;ingredients&quot;: [
                &quot;milk&quot;,
                &quot;coffee&quot;,
                &quot;caramel syrup&quot;
            ],
            &quot;description&quot;: &quot;Sweet latte with caramel.&quot;,
            &quot;ai_description&quot;: &quot;A sweet and creamy coffee drink with the rich flavor of caramel.&quot;,
            &quot;ai_calories&quot;: 250,
            &quot;ai_category&quot;: &quot;drinks&quot;,
            &quot;ai_recipe_steps&quot;: [
                &quot;Brew a shot of espresso or strong coffee.&quot;,
                &quot;Steam or froth milk.&quot;,
                &quot;Add caramel syrup to the milk and stir.&quot;,
                &quot;Pour the coffee into a mug.&quot;,
                &quot;Pour the caramel milk over the coffee.&quot;,
                &quot;Top with additional caramel drizzle if desired.&quot;
            ],
            &quot;created_at&quot;: &quot;2025-11-23T05:20:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-11-23T05:20:55.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/menu/search?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/menu/search?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/menu/search?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/menu/search&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 8,
        &quot;total&quot;: 8
    },
    &quot;pagination&quot;: {
        &quot;total&quot;: 8,
        &quot;page&quot;: 1,
        &quot;per_page&quot;: 10,
        &quot;total_pages&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-menu-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-menu-search" data-method="GET"
      data-path="api/menu/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu-search"
                    onclick="tryItOut('GETapi-menu-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu-search"
                    onclick="cancelTryOut('GETapi-menu-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-menu-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-menu-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-menu-group-by-category">GET api/menu/group-by-category</h2>

<p>
</p>



<span id="example-requests-GETapi-menu-group-by-category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/menu/group-by-category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/menu/group-by-category"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu-group-by-category">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;drinks&quot;: 8
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu-group-by-category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu-group-by-category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu-group-by-category"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-menu-group-by-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu-group-by-category">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-menu-group-by-category" data-method="GET"
      data-path="api/menu/group-by-category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu-group-by-category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu-group-by-category"
                    onclick="tryItOut('GETapi-menu-group-by-category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu-group-by-category"
                    onclick="cancelTryOut('GETapi-menu-group-by-category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu-group-by-category"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu/group-by-category</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-menu-group-by-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-menu-group-by-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-menu--id-">GET api/menu/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-menu--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/menu/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/menu/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-menu--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;OK&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Es Kopi Susu&quot;,
        &quot;category&quot;: &quot;drinks&quot;,
        &quot;calories&quot;: 180,
        &quot;price&quot;: 25000,
        &quot;ingredients&quot;: [
            &quot;coffee&quot;,
            &quot;milk&quot;,
            &quot;ice&quot;,
            &quot;sugar&quot;
        ],
        &quot;description&quot;: &quot;Classic iced coffee with milk&quot;,
        &quot;ai_description&quot;: null,
        &quot;ai_calories&quot;: null,
        &quot;ai_category&quot;: null,
        &quot;ai_recipe_steps&quot;: null,
        &quot;created_at&quot;: &quot;2025-11-23T03:59:11.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-11-23T03:59:11.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-menu--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-menu--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-menu--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-menu--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-menu--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-menu--id-" data-method="GET"
      data-path="api/menu/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-menu--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-menu--id-"
                    onclick="tryItOut('GETapi-menu--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-menu--id-"
                    onclick="cancelTryOut('GETapi-menu--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-menu--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/menu/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-menu--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-menu--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-menu--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the menu. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-menu--id-">PUT api/menu/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-menu--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/menu/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"category\": \"architecto\",
    \"calories\": 4326.41688,
    \"price\": 4326.41688,
    \"ingredients\": [],
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/menu/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "category": "architecto",
    "calories": 4326.41688,
    "price": 4326.41688,
    "ingredients": [],
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-menu--id-">
</span>
<span id="execution-results-PUTapi-menu--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-menu--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-menu--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-menu--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-menu--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-menu--id-" data-method="PUT"
      data-path="api/menu/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-menu--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-menu--id-"
                    onclick="tryItOut('PUTapi-menu--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-menu--id-"
                    onclick="cancelTryOut('PUTapi-menu--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-menu--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/menu/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-menu--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-menu--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-menu--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the menu. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-menu--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category"                data-endpoint="PUTapi-menu--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>calories</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="calories"                data-endpoint="PUTapi-menu--id-"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="PUTapi-menu--id-"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ingredients</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ingredients"                data-endpoint="PUTapi-menu--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-menu--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-menu--id-">DELETE api/menu/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-menu--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/menu/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/menu/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-menu--id-">
</span>
<span id="execution-results-DELETEapi-menu--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-menu--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-menu--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-menu--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-menu--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-menu--id-" data-method="DELETE"
      data-path="api/menu/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-menu--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-menu--id-"
                    onclick="tryItOut('DELETEapi-menu--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-menu--id-"
                    onclick="cancelTryOut('DELETEapi-menu--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-menu--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/menu/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-menu--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-menu--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-menu--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the menu. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
