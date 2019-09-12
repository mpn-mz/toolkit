<extends:spiral:element/>

<!--
NOTE: .form-content was added for blur effects
We can't set blur on form itself, because it will blur lockers(loaders) too.
-->
<block:body>
    <form class="${class} js-sf-form" action="${action}" method="${method|post}"
          enctype="multipart/form-data" accept-charset="UTF-8" node:attributes="exclude:form-class">
        <div class="form-content" node:attributes="prefix:content">
            <yield:context/>
        </div>
    </form>
</block:body>