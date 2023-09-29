## OLD

classDiagram
class Utilisateur {
+id: int
+nom: string
+email: string
}
class ConnexionDB {
-dbHost: string
-dbPort: int
-dbUser: string
-dbPassword: string
+seConnecter(): void
+executerRequete(sql: string): void
-instance: Singleton
-constructor()
+getInstance(): Singleton
}
Utilisateur --|> ConnexionDB
Utilisateur --> Singleton : <<utilise>>
Singleton --> ConnexionDB : <<utilise>>


## Nejma

classDiagram
UserDTO -- UserDAO : getData
UserGameDTO -- UserGameDAO : getData
BoardDTO -- BoardDAO : getData
PionSetDTO -- PionSetDAO : getData
MovementHistoryDTO -- MovementHistoryDAO : getData
PurchaseDTO -- PurchaseDAO : getData
UserDAO -- DB : uses
GameDAO -- DB : uses
UserGameDAO -- DB : uses
BoardDAO -- DB : uses
PionSetDAO -- DB : uses
PurchaseDAO -- DB : uses
MovementHistoryDAO -- DB : uses
class UserDAO {
createUser()
getUser()
EditUSer()
DeleteUser()
}
class UserDTO {
+id: int
+email: string
+pseudo: string
+password: string
+avatar: string
+date_of_birth: date
+parent_email: string
+parent_approval: bool
+jetons: int
}
class GameDAO {
createGame()
getGame()
EditGame()
DeleteGame()
}
class UserGameDAO {
createUserGame()
getUserGame()
}
class UserGameDTO {
+id: int
+user_id: int
+game_id: int
+pions_set_id: int
+board_id: int
+statut: string
+winner: bool
}
class BoardDAO {
createBoard()
getBoard()
editBoard()
deleteBoard()
}
class BoardDTO {
+id: int
+game_id: int
+user_id: int
+size: string
+color: string
+display_size: int
}
class PionSetDAO {
createPions()
getPions()
editPions()
deletePions()
}
class PionSetDTO {
+id: int
+game_id: int
+user_id: int
+pattern: string
+color: string
}
class PurchaseDAO {
createPurchase()
getPurchase()
}
class PurchaseDTO {
+id: int
+user_id: int
+item: string
+price: int
+date: date
}
class MovementHistoryDAO {
createMove()
getMove()
}
class MovementHistoryDTO {
+id: int
+game_session_id: int
+user_id: int
+move_description: string
+move_time: date
}
class DB {
-servername: string
-username: string
-password: string
-dbname: string
-port: int
}





