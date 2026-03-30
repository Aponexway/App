import React, { useState } from 'react';
import './App.css';

function App() {
  // СОЗДАЕМ ПЕРЕМЕННЫЕ (как в PHP)
  const [language, setLanguage] = useState('');
  const [themes, setThemes] = useState([]);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState('');

  // СПИСОК ЯЗЫКОВ (как в БД)
  const languages = ['php', 'js', 'python', 'java', 'cpp'];

  // ФУНКЦИЯ ПОЛУЧЕНИЯ ТЕМ
  const fetchThemes = async () => {
    if (!language) return;
    
    setLoading(true);
    setError('');
    
    try {
      // ОТПРАВЛЯЕМ POST ЗАПРОС К PHP
      const response = await fetch('http://localhost:8000/api/post.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ 
          language: language  // ОТПРАВЛЯЕМ ЯЗЫК
        })
      });
      
      const data = await response.json();
      console.log('Ответ от PHP:', data); // СМОТРИМ ЧТО ПРИШЛО
      
      if (data.success) {
        // PHP ВЕРНУЛ УСПЕХ - СОХРАНЯЕМ ТЕМЫ
        setThemes(data.themes);
      } else {
        // PHP ВЕРНУЛ ОШИБКУ
        setError(data.error);
        setThemes([]);
      }
    } catch (err) {
      console.error('Ошибка:', err);
      setError('Ошибка соединения с сервером');
    } finally {
      setLoading(false);
    }
  };

  return (
    <div className="App" style={{ padding: '20px' }}>
      <h1>📚 Учебные материалы</h1>
      
      {/* ВЫБОР ЯЗЫКА */}
      <div style={{ marginBottom: '20px' }}>
        <select 
          value={language} 
          onChange={(e) => {
            setLanguage(e.target.value);
            setThemes([]); // ОЧИЩАЕМ ТЕМЫ ПРИ СМЕНЕ ЯЗЫКА
          }}
          style={{
            padding: '10px',
            fontSize: '16px',
            marginRight: '10px',
            width: '200px'
          }}
        >
          <option value="">Выберите язык</option>
          {languages.map(lang => (
            <option key={lang} value={lang}>
              {lang.toUpperCase()}
            </option>
          ))}
        </select>
        
        <button 
          onClick={fetchThemes}
          disabled={!language || loading}
          style={{
            padding: '10px 20px',
            fontSize: '16px',
            backgroundColor: '#4CAF50',
            color: 'white',
            border: 'none',
            borderRadius: '4px',
            cursor: 'pointer'
          }}
        >
          {loading ? 'Загрузка...' : 'Показать темы'}
        </button>
      </div>

      {/* ОШИБКА */}
      {error && (
        <div style={{ 
          color: 'red', 
          padding: '10px',
          backgroundColor: '#ffeeee',
          borderRadius: '4px',
          marginBottom: '20px'
        }}>
          ❌ {error}
        </div>
      )}

      {/* ТЕМЫ */}
      {themes.length > 0 && (
        <div>
          <h2>Темы для {language}:</h2>
          <div style={{
            display: 'grid',
            gap: '10px',
            gridTemplateColumns: 'repeat(auto-fill, minmax(300px, 1fr))'
          }}>
            {themes.map((theme, index) => (
              <div
                key={index}
                style={{
                  padding: '15px',
                  backgroundColor: theme.has_matter ? '#e8f5e8' : '#ffebee',
                  borderRadius: '8px',
                  border: theme.has_matter ? '1px solid #4CAF50' : '1px solid #f44336'
                }}
              >
                <div style={{ display: 'flex', alignItems: 'center' }}>
                  <span style={{ fontSize: '20px', marginRight: '10px' }}>
                    {theme.has_matter ? '✅' : '❌'}
                  </span>
                  <strong>{theme.name}</strong>
                </div>
                
                {theme.has_matter ? (
                  <a
                    href={theme.link}
                    target="_blank"
                    rel="noopener noreferrer"
                    style={{
                      display: 'inline-block',
                      marginTop: '10px',
                      color: '#2196F3',
                      textDecoration: 'none'
                    }}
                  >
                    📖 Перейти к материалу →
                  </a>
                ) : (
                  <div style={{ 
                    marginTop: '10px', 
                    color: '#999',
                    fontStyle: 'italic'
                  }}>
                    Нет материалов
                  </div>
                )}
              </div>
            ))}
          </div>
        </div>
      )}
    </div>
  );
}

export default App;