<template>
    
<div @dblclick="openOverlay()" :id="'body'+ this.id" :class=" isAuthorized ? 'pointer' : ''">
    <slot></slot>
    <overlay  v-if="isAuthorized()" :identifier="id + 'section'">
    
        <textarea v-model="body" rows="8" style="border-color: #f1f1f1;" class="border-accent full-width space-inside-sides-md space-inside-md" > </textarea>

        <button @click="update" style="background: #E65100;" class="text-color-light border-none space-inside-xs space-inside-sides-sm"> aanpassen </button>
    </overlay>
</div>

</template>

<script>
  

    export default {
        props: {
            id: null,
        },

        data() {
            return {
                section: null,
                contents: null,
                body: null,
            }
        },

        mounted() {
            
            this.load();
            Event.listen('editable:updates', () => {
                this.load();
            });

        },

        methods: {
            load() {
                Factory.getStaticInstance('section').find(this.id).then((section) => {
                this.section = section;
             
                this.setUpReference();
                this.populateHtml(section.body);
                this.populateInput();
            });

            },

            isAuthorized() {
                 return API.isAuthorized();
            },

            openOverlay() {
                Event.fire('overlay:open' + this.id + 'section');
            },

            setUpReference() {
               this.contents = $('#body' + this.id + ' span.__text_content__');      
              
      
            },

            populateHtml(body) {
                let amountOfParts = this.contents.length;
                let bodyInParts = body.split(" ");
                
                for(let i = 1; i <= amountOfParts; i++) {
                    if(i < amountOfParts ) {
                        
                        this.contents[i-1].innerHTML = Helper.nl2br(bodyInParts.shift(), false);
                    } else {
                        this.contents[i-1].innerHTML = Helper.nl2br(bodyInParts.join(" "), false);
                    }
                  
                }
            },

            populateInput() {
                this.body = _.map(this.contents, (body) => {
                    return body.innerHTML.replace(/<br\s*[\/]?>/gi, "");
                }).join(' ');
                this.body = this.body.replace(/<br\s*[\/]?>/gi, "");

                
            },

            update() {
                this.populateHtml(this.body);

                this.section.body = this.body;
                this.section.update().then(() => {
                    Event.fire('editable:updates');
                    Event.fire('overlay:close');
                });
            }
        }


    }
</script>