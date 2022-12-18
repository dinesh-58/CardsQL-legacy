# Flashcards + SQL = CardsQL

Project submission for my Web Technology class slapped together with barebones knowledge of php.  
If you want to use an actual decent flashcard app, use [Anki](https://apps.ankiweb.net/) or [RemNote](https://www.remnote.com/).


The `Add` page just adds a new card as a row to the database table.  
`Review` retrieves cards due today or older. 
The response to a card is used to calculate its next review date.  
Proper flashcard apps will use sophisticated Spaced Repition algorithms like [SM-2](https://github.com/thyagoluciano/sm2) for the next review.
This uses a more basic approach.
```
response1 -> next-review = today + 1 day
response2 -> next-review = today + 2 days
response3 -> next-review = today + 4 days
```

I've written down more features I was planning on implementing in [notes.md](notes.md) but I lost interest as the deadline got closer.
## Screeenshots
<img src="screenshots/screenshot-add.png" width="400" align="left"/>  
<img src="screenshots/screenshot-review-before.png" width="400" align="left"/>  
<img src="screenshots/screenshot-review-after.png" width="400" align="left"/>   
