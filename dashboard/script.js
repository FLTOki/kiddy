new Vue({
  el: "#vue",

  created() {
    this.doubleUp()
  },

  data() {
    return {
      loading: true,
      imagesLimit: 6,
      allLoaded: false,
      liveSearchString: '',
      images: [
        {
          id: 1,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/thumbs/math.jpg',
          name: 'Math Soccer',
          description: 'Score goals by answering math problems!',
          category: 'Math'
        },
        {
          id: 2,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/pizza.jpg',
          name: 'Pizza Division',
          description: 'Pizza Division is a timed puzzle game. In Pizza Division you must cut a pizza into the desired amount of slices and all of the slices must be of a uniform size. You will be scored on your accuracey and on your speed. Lots of pizza\'s isn\'t neccesarily good if they aren\'t accurate an d perfecgtly accurate cuts aren\'t important if you only manage to get one or two done. You must always be working on both skills at once, the synergy of the two skills will come together and create beautiful high scores.',
          category: 'Math'
        },
        {
          id: 3,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/thumbs/spell.gif',
          name: 'Spellaroo',
          description: 'Help Spellaroo with his spelling!',
          category: 'English'
        },
        {
          id: 4,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/kingm.jpg',
          name: 'King of Math',
          description: 'Zombies are attacking your lands! As the king of not only your kingdom, but also math, it’s up to you – and you alone – to stop the zombies from taking over. All you have to do is answer the math questions right, and you’ll save the kingdom',
          category: 'Math'
        },
        {
          id: 5,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/schoolrun.png',
          name: 'School Run',
          description: 'Ali and Mia are late for school! Can you help them to run to school safely?',
          category: 'Life Skills'
        },
        {
          id: 6,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/crossword.jpg',
          name: 'Cross Word',
          description: '',
          category: 'English'
        },
        {
          id: 7,
          url: 'http://via.placeholder.com/500x500',
          bigUrl: '../assets/images/abc.jpg',
          name: 'ABC Countdown',
          description: 'Can you put the letters of the alphabet in the right order? Sounds easy? You\'ve got 30 seconds!',
          category: 'Animal'
        }
      ]
    }
  },

  computed: {
    truncatedFilteredImages() {
      if(this.liveSearchString.trim().length > 0) {
        return this.images.filter((image) => {
          let parts = this.liveSearchString.trim().split(" ");

          for(let part of parts) {
            let searchRegex = new RegExp(part, 'i');

            if(!(
              searchRegex.test(image.name) ||
              searchRegex.test(image.description) ||
              searchRegex.test(image.category)
            )) {
              return false;
            }
          }

          return true;
        })
      } else {
        return this.images.slice(0,this.imagesLimit)
      }
    }
  },

  filters: {
    truncateText: (text) => {
      if(text.length > 60) {
        text = text.substring(0, 125) + "...";
      }

      return text;
    }
  },

  methods: {
    doubleUp() {
      //fake a bunch of data
      let localImages = JSON.parse(JSON.stringify(this.images))

      localImages.forEach((image) => {
        let newImage = image
        newImage.id  = image.id * 2
        //this.images.push(newImage)
      })

      setTimeout(() => {
        this.loading = false
        //then run replacePleaceholders
        this.replacePlaceholders()
      }, 200)


    },

    replacePlaceholders() {
      this.images.forEach((image, i) => {
        let newImg = document.createElement("img")
        newImg.src = image.bigUrl
        newImg.id = "preload-" + i
        document.getElementById("imageLoaderDock").appendChild(newImg)

        document.getElementById("preload-" + i).onload = () => {
          this.images[i].url = image.bigUrl
        }
      })
    },

    showMore() {
      this.imagesLimit += 6

      if(this.imagesLimit >= this.images.length) {
        this.imagesLimit = this.images.length
        this.allLoaded = true
      }
    }
  }
})
