<extends:spiral:element/>

<block:body>
    <label class="item-form ${wrapper-class}" node:attributes="prefix:wrapper">
        <?php #compiled
        //Receiving label content as evaluator variable
        $this->evaluatorVariable('label', '${label}');
        if (!empty($label) && $label != "''") {
            ?>
            <block:input-label>
                <span class="${label-class} item-label"
                      node:attributes="prefix:label">${label}</span>
            </block:input-label>
            <?php #compiled
        }
        ?>
        <block:input-body>
            <input type="${type|text}" name="${name}" value="${value}${context}"
                   data-prefix="${prefix}" data-pattern="${pattern}"
                   class="item-input <?= (!empty($prefix) && $prefix != "''") || (!empty($pattern) && $pattern != "''") ? 'sf-js-input' : '' ?>"
                   node:attributes/>
        </block:input-body>
    </label>
</block:body>