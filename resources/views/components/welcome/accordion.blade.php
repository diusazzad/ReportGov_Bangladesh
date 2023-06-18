<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/tailwindcss@1.4.6/dist/tailwind.css'>
@vite('resources/css/app.css', 'resources/js/app.js')
<div class="bg-gray-100 pt-10 px-3 pb-20">
    <h1 class="text-gray-600 text-center">
        <div class="font-bold">
            Smooth Accordion
        </div>
        using Alpine.js (w/ x-for) + Tailwind CSS
    </h1>

    <div class="my-10 max-w-2xl mx-auto space-y-4 lg:space-y-6" x-data="{ faq, faq_selected: null }">

        <template x-for="(item, index) in faq" :key="`item-{$index}`">

            <div class="item bg-white shadow-md rounded-md p-3">
                <div class="flex items-center cursor-pointer"
                    @click="faq_selected !== index ? faq_selected = index : faq_selected = null">
                    <div
                        class="bg-indigo-100 text-indigo-400 w-8 h-8 md:w-10 md:h-10 rounded-md flex items-center justify-center font-bold text-lg font-display">
                        <span x-text="index + 1"></span>
                    </div>
                    <div class="ml-3 md:ml-4 lg:ml-6 md:text-lg text-indigo-600">
                        <span x-text="item.question"></span>
                    </div>
                </div>
                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                    x-bind:style="faq_selected === index ? `max-height:  ${ $el.scrollHeight }px` : ``">
                    <div class="text-gray-700 ml-8 md:ml-10 pl-3 md:pl-4 lg:pl-6 py-2 space-y-3">

                        <template x-for="(ans, index) in item.answer" :key="`item-ans-{$index}`">
                            <p x-text="ans"></p>
                        </template>

                    </div>
                </div>
            </div>

        </template>

    </div>
</div>
<script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script>
<script>
    const faq = [{
            question: "What is Alpine.js?",
            answer: [
                "Bacon ipsum dolor amet boudin hamburger jerky spare ribs, bacon leberkas beef ribs sausage turkey pancetta tenderloin chicken.",
                "Meatball landjaeger turducken. Bacon bresaola tenderloin cow rump pork chop."
            ]
        },
        {
            question: "Is it difficult to learn?",
            answer: [
                "Boudin sausage hamburger tenderloin beef chislic prosciutto pancetta. Beef tongue pork meatloaf.",
                "Chicken pork chop turducken ground round. Shank bresaola burgdoggen short loin ham hock ham. Boudin tri-tip swine drumstick strip steak tail."
            ]
        },
        {
            question: "How can I use this code?",
            answer: [
                "Salami filet mignon strip steak venison rump chicken bresaola. Shank flank tongue ribeye. Beef pork chop sirloin venison chicken jowl.",
                "Doner corned beef kielbasa beef ribs ground round cow salami swine."
            ]
        }
    ];
</script>
