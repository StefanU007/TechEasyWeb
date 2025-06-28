import { ref, reactive } from "vue";
import { defineStore } from "pinia";


const colorCategories = [
    {
        name: 'Basic Colors',
        colors: [
            {
                one: "#000000", // Black
                two: "#000000",
                three: "#000000",
            },
            {
                one: "#FFFFFF", // White
                two: "#FFFFFF",
                three: "#FFFFFF",
            },
            {
                one: "#FF0000", // Red
                two: "#FF0000",
                three: "#FF0000",
            },
        ]
    },
    {
        name: 'Neutral Set 1',
        colors: [
            {
                one: "#FFCDB2",
                two: "#FFB4A2",
                three: "#E5989B",
            },
            {
                one: "#FFE8D6",
                two: "#B7B7A4",
                three: "#A5A58D",
            },
            {
                one: "#F8EDEB",
                two: "#F9DCC4",
                three: "#FEC89A",
            },
        ]
    },
    {
        name: 'Neutral Set 2',
        colors: [
            {
                one: "#D3CBCB",
                two: "#E2DDD7",
                three: "#F7F4F3",
            },
            {
                one: "#B8B8A2",
                two: "#D9CEB2",
                three: "#ECE3D3",
            },
            {
                one: "#DFDFDF",
                two: "#C0C0C0",
                three: "#A5A5A5",
            },
        ]
    },
    {
        name: 'Bright Set 1',
        colors: [
            {
                one: "#DEE2FF",
                two: "#FEEAFA",
                three: "#EFD3D7",
            },
            {
                one: "#A9D6E5",
                two: "#89C2D9",
                three: "#61A5C2",
            },
            {
                one: "#D8F3DC",
                two: "#B7E4C7",
                three: "#95D5B2",
            },
        ]
    },
    {
        name: 'Bright Set 2',
        colors: [
            {
                one: "#FFD6E0",
                two: "#FF8C94",
                three: "#FFAAA6",
            },
            {
                one: "#B5EAEA",
                two: "#EDF6E5",
                three: "#FFBCBC",
            },
            {
                one: "#A0E7E5",
                two: "#B4F8C8",
                three: "#FBE7C6",
            },
        ]
    },
    {
        name: 'Dark Set 1',
        colors: [
            {
                one: "#023047",
                two: "#D62828",
                three: "#F77F00",
            },
            {
                one: "#240046",
                two: "#3C096C",
                three: "#5A189A",
            },
            {
                one: "#6F1D1B",
                two: "#BB9457",
                three: "#432818",
            },
        ]
    },
    {
        name: 'Dark Set 2',
        colors: [
            {
                one: "#4F1D28",
                two: "#561A38",
                three: "#5E1B48",
            },
            {
                one: "#2C2C54",
                two: "#46466E",
                three: "#6A0572",
            },
            {
                one: "#111111",
                two: "#333333",
                three: "#555555",
            },
        ]
    }
];


const fonts = [
    "Arial, Helvetica, sans-serif", // Widely available sans-serif font
    "Courier New, Courier, monospace", // A standard monospaced font
    "Monospace", // Generic monospace family
    "Times New Roman, Times, serif", // Traditional serif font
    "Verdana, Geneva, sans-serif", // A clean, simple sans-serif font
    "Lucida Console, Monaco, monospace", // Preferred monospaced font in many coding environments
    "Georgia, serif", // Readable serif font, good for long texts
    "Arial Black, Gadget, sans-serif",// A bold, impactful sans-serif font
    "Segoe UI, Frutiger, Dejavu Sans, Helvetica Neue, sans-serif" // A modern, legible sans-serif font
];




export const useAppStore = defineStore("app", () => {
    const currentPage = ref("ChooseYourTemplate");
    const selectedTemplate = ref(1);
    const questionare = reactive({
        name: "",
        desc: "",
        location: "",
        logo: "",
        image:""
    });
    const selectedColor = ref(colorCategories[0].colors[0]);
    const selectedFont = ref(0);

    function setCurrentPage(page) {
        currentPage.value = page;
    }

    function setSelectedTemplate(template) {
        selectedTemplate.value = template;
    }

    function setSelectedColor(color) {
        selectedColor.value = color;
    }

    function setSelectedFont(font) {
        selectedFont.value = font;
    }

    return {
        currentPage,
        setCurrentPage,
        selectedTemplate,
        setSelectedTemplate,
        questionare,
        colorCategories,
        selectedColor,
        setSelectedColor,
        fonts,
        selectedFont,
        setSelectedFont,
    };
});
