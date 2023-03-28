function startSlider(path){
    $(path).slick({
        arrows : false,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover:false,
        pauseOnFocus:true,
        swipe: false,
        touchMove: true,
    });
}
startSlider('.blockOfOneSlider')
startSlider('.blockOfTwoSlider')
startSlider('.blockOfThreeSlider')
startSlider('.blockOfFourSlider')
startSlider('.blockOfFiveSlider')
startSlider('.blockOfSixSlider')
startSlider('.blockOfSevenSlider')
startSlider('.blockOfEightSlider')
startSlider('.blockOfNineSlider')
startSlider('.blockOfTenSlider')
startSlider('.blockOfElevenSlider')
startSlider('.blockOfTwelveSlider')




const BlockOfOneProject = document.querySelectorAll('.BlockOfOneProject')
const BlockOfTwoProject = document.querySelectorAll('.BlockOfTwoProject')
const BlockOfThreeProject = document.querySelectorAll('.BlockOfThreeProject')
const BlockOfFourProject = document.querySelectorAll('.BlockOfFourProject')
const BlockOfFiveProject = document.querySelectorAll('.BlockOfFiveProject')
const BlockOfSixProject = document.querySelectorAll('.BlockOfSixProject')
const BlockOfSevenProject = document.querySelectorAll('.BlockOfSevenProject')
const BlockOfEightProject = document.querySelectorAll('.BlockOfEightProject')
const BlockOfNineProject = document.querySelectorAll('.BlockOfNineProject')
const BlockOfTenProject = document.querySelectorAll('.BlockOfTenProject')
const BlockOfElevenProject = document.querySelectorAll('.BlockOfElevenProject')
const BlockOfTwelveProject = document.querySelectorAll('.BlockOfTwelveProject')


function startEndPause(blockOfStart, blockOfSlider){

            blockOfStart[0].addEventListener("click",eventOne)
            let element = 0

            function eventOne(){
                if (element == 0){
                    element = element + 1 
                    return $(blockOfSlider).slick('slickSetOption', {autoplay: false}, true)
                }
                else if(element == 1){
                    element = element - 1
                    return $(blockOfSlider).slick('slickSetOption', {autoplay: true}, true)
                }
            }
        }

startEndPause(BlockOfOneProject,'.blockOfOneSlider')
startEndPause(BlockOfTwoProject,'.blockOfTwoSlider')
startEndPause(BlockOfThreeProject,'.blockOfThreeSlider')
startEndPause(BlockOfFourProject,'.blockOfFourSlider')
startEndPause(BlockOfFiveProject,'.blockOfFiveSlider')
startEndPause(BlockOfSixProject,'.blockOfSixSlider')
startEndPause(BlockOfSevenProject,'.blockOfSevenSlider')
startEndPause(BlockOfEightProject,'.blockOfEightSlider')
startEndPause(BlockOfNineProject,'.blockOfNineSlider')
startEndPause(BlockOfTenProject,'.blockOfTenSlider')
startEndPause(BlockOfElevenProject,'.blockOfElevenSlider')
startEndPause(BlockOfTwelveProject,'.blockOfTwelveSlider')